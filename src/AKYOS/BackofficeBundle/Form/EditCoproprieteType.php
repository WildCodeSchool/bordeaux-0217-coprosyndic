<?php

namespace AKYOS\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

class EditCoproprieteType extends AbstractType
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
                'format' => 'yyyy-MM-dd',))
            ->add('dateModifImmat', DateType::class, array(
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
            ->add('dateCreation', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
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
                'required' => false,
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
            ->add('submit',SubmitType::class, array(
                'label'=>'Modifier',
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\BackofficeBundle\Entity\Copropriete'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'akyos_BackofficeBundle_copropriete';
    }


}
