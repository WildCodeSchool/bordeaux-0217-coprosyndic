<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Lot;
use Doctrine\ORM\EntityRepository;
use Faker\Provider\Text;
use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditCoproprietaireType extends AbstractType
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
            ->add('commentSyndic')
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
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
            ->add('rib')
            ->add('nbEnfants')
            ->add('dateArrivee', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('dateDepart', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('actuel', CheckboxType::class, array(
                'label' => 'Propriétaire actuel',
                ))
            ->add('membreConseil', CheckboxType::class, array(
                'label' => 'Conseiller syndical',
            ))
            ->add('submit',SubmitType::class, array(
                'label'=>'Modifier',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Coproprietaire'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_easy_copro_backend_syndic_editCopro';
    }


}