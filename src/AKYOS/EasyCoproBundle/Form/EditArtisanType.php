<?php

namespace AKYOS\EasyCoproBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditArtisanType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('user', ProfileFormType::class)
            ->add('raisonSociale')
            ->add('activite')
            ->add('siret')
            ->add('emailBureau')
            ->add('telephoneBureau')
            ->add('adressePrinc')
            ->add('adresseSec')
            ->add('ville')
            ->add('codePostal')
            ->add('contactNom')
            ->add('contactPrenom')
            ->add('contactTelephone')
            ->add('contactEmail')
            ->add('submit',SubmitType::class, array('label' => 'Modifier'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Artisan'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_easy_copro_backend_syndic_editArtisan';
    }


}