<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Range;

class CreateCoproprieteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('immatriculation')
            ->add('dateImmat', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('adressePrinc')
            ->add('adresseSec', TextType::class, array(
                'required' => false,
            ))
            ->add('codePostal')
            ->add('ville')
            ->add('dateDebutGestion', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
                ))
            ->add('parcelleCadastrale',TextType::class, array(
                'required' => false
            ))
            ->add('nbBatiments', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0)),
                'required' => false
            ))
            ->add('periodeConstruction', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('dateReglement', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('nbAscenseurs', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0)),
                'required' => false,
            ))
            ->add('typeChauffage',TextType::class, array(
                'required' => false,
            ))
            ->add('illustrationFile', FileType::class, array(
                'label' => 'Choisissez une illustration :',
                'required' => false,
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Créer'
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Copropriete'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_copropriete';
    }


}
