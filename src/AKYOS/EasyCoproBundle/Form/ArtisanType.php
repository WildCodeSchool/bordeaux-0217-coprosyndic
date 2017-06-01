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
            ->add('raisonSociale', TextType::class,array('attr' => array('placeholder' => 'Raison Sociale')))
            ->add('activite', TextType::class,array('attr' => array('placeholder' => 'Activité')))
            ->add('emailBureau', EmailType::class,array('attr' => array('placeholder' => 'Email de l\'Artisan')))
            ->add('telephoneBureau', TextType::class,array('attr' => array('placeholder' => 'Télephone Bureau')))
            ->add('adressePrinc', TextType::class,array('attr' => array('placeholder' => 'Adresse Principale')))
            ->add('adresseSec', TextType::class,array('attr' => array('placeholder' => 'Adresse Secondaire')))
            ->add('ville', TextType::class,array('attr' => array('placeholder' => 'Ville')))
            ->add('contactNom', TextType::class,array('attr' => array('placeholder' => 'Nom Contact')))
            ->add('contactPrenom', TextType::class,array('attr' => array('placeholder' => 'Prenom Contact')))
            ->add('contactTelephone', TextType::class,array('attr' => array('placeholder' => 'Contact Téléphone')))
            ->add('contactEmail', TextType::class,array('attr' => array('placeholder' => 'Contact Email')))
            ->add('submit',SubmitType::class)
        ;

        $copro = $builder->getForm();

    }


    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_artisan';
    }

}