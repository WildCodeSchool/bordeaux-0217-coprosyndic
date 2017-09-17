<?php

namespace AKYOS\BackofficeBundle\Form;

use AKYOS\BackofficeBundle\Entity\Lot;
use Doctrine\ORM\EntityRepository;
use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditLocataireType extends AbstractType
{
    private $container;
    private $copropriete;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->copropriete = $this->container->get('session')->get('copro');
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', ProfileFormType::class)
            ->add('commentSyndic', TextareaType::class, array(
                'required' => false,
            ))
            ->add('email', TextType::class, array(
                'required' => false,
            ))
            ->add('nom',TextType::class, array(
                'required' => false,
            ))
            ->add('prenom', TextType::class, array(
                'required' => false,
            ))
            ->add('telephone',TextType::class, array(
                'required' => false,
            ))
            ->add('rib', TextType::class, array(
                'required' => false,
            ))
            ->add('copropriete', TextType::class, array(
                'label' => 'Copropriété',
                'disabled' => true,
                'data' => $this->copropriete,
                'mapped' => false,
            ))
            ->add('lot', EntityType::class, array(
                'class'=> Lot::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->where('l.copropriete = :copropriete')
                        ->andWhere('l.occupeAct = false')
                        ->setParameter('copropriete', $this->copropriete);
                },
                'choice_label'=>function($lot){
                    return $lot->getIdentifiant();
                }
            ))
            ->add('nbEnfants', IntegerType::class, array(
                'required' => false,
            ))
            ->add('dateArrivee', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('dateDepart', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('actuel', CheckboxType::class, array(
                'label' => 'En cours de location',
                'required' => false,
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'Modifier',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\BackofficeBundle\Entity\Locataire'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_easy_copro_backend_syndic_editLocataire';
    }


}