<?php

namespace AKYOS\EasyCoproBundle\Form;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;

class CreateLocataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', RegistrationFormType::class)
            ->add('commentSyndic', TextType::class,array('attr' => array('placeholder' => 'Note du Syndic')))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email du locataire')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du locataire')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom du locataire')))
            ->add('telephone', TextType::class,array('attr' => array('placeholder' => 'Télephone du locataire')))
            ->add('rib', TextType::class,array('attr' => array('placeholder' => 'RIB du locataire')))
            ->add('dateArrivee', DateType::class, array('widget' => 'single_text',))
            ->add('dateDepart', DateType::class, array('widget' => 'single_text',))
            ->add('actuel', CheckboxType::class, array('label'    => 'Locataire Actuel', 'required' => true,))
            ->add('submit',SubmitType::class)
        ;

    }


    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_locataire';
    }

}