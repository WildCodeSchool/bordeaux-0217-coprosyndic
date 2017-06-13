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
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CreateDocumentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class,array('attr' => array('placeholder' => 'Titre')))
            ->add('docName', TextType::class,array('attr' => array('placeholder' => 'Nom du Document')))
            ->add('description', TextType::class,array('attr' => array('placeholder' => 'Description')))
            ->add('confidentialite', IntegerType::class,array('attr' => array('placeholder' => 'Confidentialité')))
            ->add('url', UrlType::class,array('attr' => array('placeholder' => 'URL')))

            ->add('submit',SubmitType::class)
        ;

        //$document = $builder->getForm();

    }


    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_document';
    }

}