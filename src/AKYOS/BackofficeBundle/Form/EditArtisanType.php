<?php

namespace AKYOS\BackofficeBundle\Form;

use AKYOS\BackofficeBundle\Entity\Artisan;
use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditArtisanType extends AbstractType
{
    private $container;
    private $copropriete;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->copropriete = $this->container->get('session')->get('copro');
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('user', ProfileFormType::class)
            ->add('raisonSociale', TextType::class, array(
                'required' => false,
            ))
            ->add('copropriete', TextType::class, array(
                'label' => 'Copropriété',
                'disabled' => true,
                'data' => $this->copropriete,
                'mapped' => false,
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
            ->add('commentSyndic', TextareaType::class, array(
                'label' => 'Votre commentaire',
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