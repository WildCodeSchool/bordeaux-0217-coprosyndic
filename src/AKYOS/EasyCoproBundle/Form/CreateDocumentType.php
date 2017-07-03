<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Entity\Lot;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AKYOS\EasyCoproBundle\Entity\Document;

class CreateDocumentType extends AbstractType
{
    private $container;
    private $session;

    public function __construct(ContainerInterface $container, SessionInterface $session)
    {
        $this->container = $container;
        $this->session = $session;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $em = $this->container->get('doctrine')->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);
        $categories = $em->getRepository(Categorie::class)->findCategorieBySyndic($syndic);
        $coproprietes = $syndic->getCoproprietes();

        $builder
            ->add('titre', TextType::class,array(
                'attr' => array('placeholder' => 'Saisissez le titre ...'),
                'label' => 'Titre du document'
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('placeholder' => 'Saisissez la description ...'),
                'label' => 'Description'
            ))
            ->add('fichier', FileType::class, array(
                'label' => 'Fichier'
                ))
            ->add('categorie', ChoiceType::class, array(
                'choices' => $categories,
                'choice_label' => function ($categorie) {
                    return $categorie->getNom();
                },
                'label' => 'Catégorie',
            ))
            ->add('copropriete', ChoiceType::class, array(
                'choices' => $coproprietes,
                'choice_label' => function ($copropriete) {
                    return $copropriete->getNom();
                },
                'label' => 'Copropriété',
            ))
            ->add('toLocataires', CheckboxType::class, array(
                'label' => 'Diffuser également aux locataires ?',
                'label_attr' => array('class' => 'control-label', 'style' => 'margin-right: 15px;'),
                'required' => false,
                'mapped' => false,
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'Ajouter',
            ));

        $formModifier = function (FormInterface $form, Copropriete $copropriete = null) {
            $lots = null === $copropriete ? array() : $copropriete->getLots();

            $form->add('lots', EntityType::class, array(
                'class' => 'AKYOS\EasyCoproBundle\Entity\Lot',
                'choices' => $lots,
                'choice_label' => function (Lot $lot) {
                    $em = $this->container->get('doctrine')->getManager();
                    $coproprietaire = $em->getRepository(Coproprietaire::class)->findActuelCoproprietaire($lot);
                    return null === $coproprietaire ? 'Aucun coproprietaire' : $coproprietaire->getPrenom().' '.$coproprietaire->getNom();
                    },
                'label' => 'Lots',
                'multiple' => true,
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
        ));
    }

}