<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateArtisanType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', CreateUserType::class)
            ->add('copropriete', ChoiceType::class,array(
                'choices' => $options['coproprietes'],
                'choice_label' => function ($copropriete) {
                    return $copropriete->getNom();
                },
                'placeholder' => 'Choisissez une copropriété',
                'label' => 'Copropriété',
            ))
            ->add('raisonSociale', TextType::class,array('attr' => array('placeholder' => 'Raison Sociale')))
            ->add('activite', TextType::class,array('attr' => array('placeholder' => 'Activité')))
            ->add('siret', TextType::class,array('attr' => array('placeholder' => 'Numéro de SIRET')))
            ->add('emailBureau', EmailType::class,array('attr' => array('placeholder' => 'Email de l\'Artisan')))
            ->add('telephoneBureau', TextType::class,array('attr' => array('placeholder' => 'Télephone Bureau')))
            ->add('adressePrinc', TextType::class,array('attr' => array('placeholder' => 'Adresse Principale')))
            ->add('adresseSec', TextType::class,array('attr' => array('placeholder' => 'Adresse Secondaire')))
            ->add('ville', TextType::class,array('attr' => array('placeholder' => 'Ville')))
            ->add('codePostal', TextType::class,array('attr' => array('placeholder' => 'Code Postal')))
            ->add('contactNom', TextType::class,array('attr' => array('placeholder' => 'Nom Contact')))
            ->add('contactPrenom', TextType::class,array('attr' => array('placeholder' => 'Prenom Contact')))
            ->add('contactTelephone', TextType::class,array('attr' => array('placeholder' => 'Contact Téléphone')))
            ->add('contactEmail', TextType::class,array('attr' => array('placeholder' => 'Contact Email')))
            ->add('commentSyndic', TextareaType::class, array(
                'label' => 'Votre commentaire',
                'required' => false,
            ))
            ->add('submit',SubmitType::class,array('label' => 'Créer le compte'))
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
        return 'akyos_easycoprobundle_artisan';
    }

}