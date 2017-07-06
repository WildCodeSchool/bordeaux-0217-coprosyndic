<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditArtisanType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('user', ProfileFormType::class)
            ->add('copropriete', ChoiceType::class,array(
                'choices' => $options['coproprietes'],
                'choice_label' => function ($copropriete) {
                    return $copropriete->getNom();
                },
                'placeholder' => 'Choisissez une copropriété',
                'label' => 'Copropriété',
            ))
            ->add('raisonSociale', TextType::class, array(
                'required' => false,
            ))
            ->add('activite', TextType::class, array(
                'required' => false,
            ))
            ->add('siret', TextType::class, array(
                'required' => false,
            ))
            ->add('emailBureau', EmailType::class, array(
                'required' => false,
            ))
            ->add('telephoneBureau', TextType::class, array(
                'required' => false,
            ))
            ->add('adressePrinc',TextType::class, array(
                'required' => false,
            ))
            ->add('adresseSec',TextType::class, array(
                'required' => false,
            ))
            ->add('ville',TextType::class, array(
                'required' => false,
            ))
            ->add('codePostal',TextType::class, array(
                'required' => false,
            ))
            ->add('contactNom',TextType::class, array(
                'required' => false,
            ))
            ->add('contactPrenom',TextType::class, array(
                'required' => false,
            ))
            ->add('contactTelephone', TextType::class, array(
                'required' => false,
            ))
            ->add('contactEmail', EmailType::class, array(
                'required' => false,
            ))
            ->add('submit',SubmitType::class, array('label' => 'Modifier'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Artisan::class,
            'coproprietes' => null,
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_easy_copro_backend_syndic_editArtisan';
    }


}