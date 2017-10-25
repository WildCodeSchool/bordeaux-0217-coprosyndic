<?php

namespace AKYOS\BackofficeBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditSyndicType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', ProfileFormType::class)
            ->add('nom')
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
            ->add('submit', SubmitType::class, array(
                'label' => 'Modifier'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\BackofficeBundle\Entity\Syndic'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_BackofficeBundle_syndic';
    }


}
