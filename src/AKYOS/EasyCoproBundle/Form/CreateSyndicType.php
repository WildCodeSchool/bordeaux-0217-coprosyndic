<?php

namespace AKYOS\EasyCoproBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSyndicType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', CreateUserType::class)
            ->add('nom', TextType::class, array(
            ))
            ->add('siret', TextType::class, array(
                'required' => false,
            ))
            ->add('adressePrinc', TextType::class, array(
            ))
            ->add('adresseSec', TextType::class, array(
                'required' => false,
            ))
            ->add('codePostal', TextType::class, array(
            ))
            ->add('ville', TextType::class, array(
            ))
            ->add('telephoneBureau', TextType::class, array(
                'required' => false,
            ))
            ->add('emailBureau', EmailType::class, array(
                'required' => false,
            ))
            ->add('contactNom', TextType::class, array(
                'required' => false,
            ))
            ->add('contactPrenom', TextType::class, array(
                'required' => false,
            ))
            ->add('contactTelephone', TextType::class, array(
                'required' => false,
            ))
            ->add('contactEmail', EmailType::class, array(
                'label' => 'Email du contact',
                'required' => false,
            ))
            ->add('submit', SubmitType::class, array(
                'label'=> 'Créer'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Syndic'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_syndic';
    }


}
