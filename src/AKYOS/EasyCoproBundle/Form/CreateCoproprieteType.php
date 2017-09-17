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
use Symfony\Component\Validator\Constraints\Range;

class CreateCoproprieteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'copropriete.new.name',
            ))
            ->add('immatriculation', TextType::class, array(
                'label' => 'copropriete.new.immatriculation',
            ))
            ->add('dateImmat', DateType::class, array(
                'label' => 'copropriete.new.immatDate',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('adressePrinc', TextType::class, array(
                'label' => 'copropriete.new.postalAddress',
            ))
            ->add('adresseSec', TextType::class, array(
                'label' => 'copropriete.new.addressComplement',
                'required' => false,
            ))
            ->add('codePostal', TextType::class, array(
                'label' => 'copropriete.new.postalCode',
            ))
            ->add('ville', TextType::class, array(
                'label' => 'copropriete.new.city',
            ))
            ->add('dateDebutGestion', DateType::class, array(
                'label' => 'copropriete.new.beginningManagingDate',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
                ))
            ->add('parcelleCadastrale',TextType::class, array(
                'label' => 'copropriete.new.cadastralParcel',
                'required' => false,
            ))
            ->add('nbBatiments', IntegerType::class, array(
                'label' => 'copropriete.new.buildingCount',
                'constraints' => new Range(array('min'=> 0)),
                'required' => false
            ))
            ->add('periodeConstruction', DateType::class, array(
                'label' => 'copropriete.new.buildingPeriod',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('dateReglement', DateType::class, array(
                'label' => 'copropriete.new.internalRegulationDate',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('nbAscenseurs', IntegerType::class, array(
                'label' => 'copropriete.new.elevatorCount',
                'constraints' => new Range(array('min'=> 0)),
                'required' => false,
            ))
            ->add('typeChauffage',TextType::class, array(
                'label' => 'copropriete.new.heatingSystem',
                'required' => false,
            ))
            ->add('illustrationFile', FileType::class, array(
                'label' => 'copropriete.new.pictureChoose',
                'required' => false,
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'copropriete.new.submit',
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
