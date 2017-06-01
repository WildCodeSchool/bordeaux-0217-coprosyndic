<?php

namespace AKYOS\EasyCoproBundle\Form;

use Doctrine\DBAL\Types\BooleanType;
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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CoproType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', RegistrationType::class)
            ->add('commentSyndic', TextType::class,array('attr' => array('placeholder' => 'Note du Syndic')))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email du copropriétaire')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du copropriétaire')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom du copropriétaire')))
            ->add('telephone', TextType::class,array('attr' => array('placeholder' => 'Télephone du copropriétaire')))
            ->add('rib', TextType::class,array('attr' => array('placeholder' => 'RIB du copropriétaire')))
            ->add('nbEnfants', TextType::class,array('attr' => array('placeholder' => 'Nombre d\'enfants')))
            ->add('dateArrivee', TextType::class,array('attr' => array('placeholder' => 'Date d\'emménagement du copropriétaire')))
            ->add('dateDepart', TextType::class,array('attr' => array('placeholder' => 'Date de départ du copropriétaire')))
            ->add('membreConseil', CheckboxType::class, array(
                'label'    => 'Mmebre du Conseil',
                'required' => true,
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