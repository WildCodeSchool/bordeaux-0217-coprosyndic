<?php

namespace AKYOS\DocumentBundle\Form;

use AKYOS\DocumentBundle\Entity\Category;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Copropriete;
use AKYOS\BackofficeBundle\Entity\Lot;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DocumentType extends AbstractType
{
    /** @var  EntityManager */
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $syndic       = $options['syndic'];
        $categories   = $syndic->getCategories();
        $coproprietes = $syndic->getCoproprietes();

        $builder
            ->add('titre', TextType::class, array(
                'attr'  => array('placeholder' => 'document.placeholders.title'),
                'label' => 'document.title'
            ))
            ->add('description', TextareaType::class, array(
                'attr'  => array('placeholder' => 'document.placeholders.description'),
                'label' => 'document.description'
            ))
            ->add('file', FileType::class, array(
                'label' => 'document.file'
            ))
            ->add('category', ChoiceType::class, array(
                'choices'      => $categories,
                'choice_label' => function (Category $categorie) {
                    return $categorie->getNom();
                },
                'label'        => 'document.category',
            ))
            ->add('copropriete', ChoiceType::class, array(
                'choices'      => $coproprietes,
                'choice_label' => function (Copropriete $copropriete) {
                    return $copropriete->getNom();
                },
                'label'        => 'document.coownership',
            ))
            ->add('toLocataires', CheckboxType::class, array(
                'label'      => 'document.toLocataires',
                'label_attr' => array('class' => 'control-label', 'style' => 'margin-right: 15px;'),
                'required'   => false,
            ))
            ->add('submit', SubmitType::class);

        $formModifier = function (FormInterface $form, Copropriete $copropriete = null) {
            $lots = null === $copropriete ? array() : $copropriete->getLots();

            $form->add('lots', EntityType::class, array(
                'class'        => Lot::class,
                'choices'      => $lots,
                'choice_label' => function (Lot $lot) {
                    /** @var Coproprietaire $coproprietaire */
                    $coproprietaire = $this->em->getRepository(Coproprietaire::class)->findActuelByLot($lot);
                    return null === $coproprietaire ? 'Aucun coproprietaire' : $coproprietaire->__toString();
                },
                'label'        => 'document.lots',
                'multiple'     => true,
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getCopropriete());
            }
        );

        $builder->get('copropriete')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $copropriete = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $copropriete);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                                   'data_class' => Document::class,
                                   'syndic'     => null,
                               ));
    }

}
