<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ArtisanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', RegistrationType::class)
            ->add('commentSyndic', TextType::class,array('attr' => array('placeholder' => 'Note du Syndic')))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email de l\'Artisan')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom de l\'Artisan')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom de l\'Artisan')))
            ->add('telephone', TextType::class,array('attr' => array('placeholder' => 'Télephone de l\'Artisan')))
            ->add('rib', TextType::class,array('attr' => array('placeholder' => 'RIB de l\'Artisan')))
            ->add('submit',SubmitType::class)
        ;

        $copro = $builder->getForm();

    }


    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_artisan';
    }

}