<?php

namespace AKYOS\EasyCoproBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CreateCoproprietaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', RegistrationFormType::class)
            ->add('commentSyndic', TextType::class,array(
                'attr' => array('placeholder' => 'Note du Syndic'),
                'required' => false,
                ))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email du copropriétaire')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du copropriétaire')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom du copropriétaire')))
            ->add('telephone', TextType::class,array('attr' => array('placeholder' => 'Télephone du copropriétaire')))
            ->add('rib', TextType::class,array('attr' => array('placeholder' => 'RIB du copropriétaire')))
            ->add('nbEnfants', IntegerType::class,array(
                'attr' => array('placeholder' => 'Nombre d\'enfants'),
            ))
            ->add('dateArrivee', DateType::class, array('widget' => 'single_text',))
            ->add('dateDepart', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
                ))
            ->add('actuel', CheckboxType::class, array(
                'label'    => 'Locataire Actuel',
                'required' => false,
                ))
            ->add('membreConseil', CheckboxType::class, array(
                'label'    => 'Membre du Conseil',
            ))
            ->add('submit',SubmitType::class)
        ;

        $copro = $builder->getForm();

    }


    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_copro';
    }

}