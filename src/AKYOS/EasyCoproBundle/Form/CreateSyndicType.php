<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSyndicType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', RegistrationType::class)
            ->add('nom')
            ->add('statut')
            ->add('siret')
            ->add('adressePrinc')
            ->add('adresseSec')
            ->add('codePostal')
            ->add('ville')
            ->add('telephoneBureau')
            ->add('emailBureau')
            ->add('contactNom')
            ->add('contactPrenom')
            ->add('contactTelephone')
            ->add('contactEmail')
            ->add('save', SubmitType::class)
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
