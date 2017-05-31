<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type', ChoiceType::class, array(
            'label' => 'Type de compte',
            'choices'  => array(
                'SuperAdmin' => 'SUPERADMIN',
                'Syndic' => 'SYNDIC',
                'Copropriétaire' => 'COPRO',
                'Locataire' => 'LOCATAIRE',
                'Artisan' => 'ARTISAN',
            ),
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


}