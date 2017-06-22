<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            ->add('dateImmat')
            ->add('dateModifImmat')
            ->add('adressePrinc')
            ->add('adresseSec')
            ->add('codePostal')
            ->add('ville')
            ->add('dateCreation')
            ->add('dateDebutGestion')
            ->add('parcelleCadastrale')
            ->add('nbBatiments', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0))))
            ->add('periodeConstruction')
            ->add('nbLots', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0))))
            ->add('dateReglement')
            ->add('nbAscenseurs', IntegerType::class, array(
                'constraints' => new Range(array('min'=> 0))))
            ->add('typeChauffage')
            ->add('syndic')
            ->add('Enregistrer', SubmitType::class)
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
