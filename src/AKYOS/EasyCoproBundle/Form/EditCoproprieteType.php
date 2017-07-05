<?php

namespace AKYOS\EasyCoproBundle\Form;

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
                'format' => 'yyyy-MM-dd',))
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
            ))
            ->add('parcelleCadastrale',TextType::class, array(
                'required' => false
            ))
            ->add('nbBatiments', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0))))
            ->add('periodeConstruction', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'required' => false,
            ))
            ->add('nbLots', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0))))
            ->add('dateReglement', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',))
            ->add('nbAscenseurs', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0))))
            ->add('typeChauffage',TextType::class, array(
                'required' => false
            ))
            ->add('syndic')
            ->add('submit',SubmitType::class, array(
                'label'=>'Mettre à jour',
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
