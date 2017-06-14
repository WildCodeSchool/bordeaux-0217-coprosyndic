<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
//use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AKYOS\EasyCoproBundle\Entity\Document;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class CreateDocumentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAjout', DateType::class,array('attr' => array('placeholder' => 'Date d\'ajout')))
            ->add('titre', TextType::class,array('attr' => array('placeholder' => 'Titre')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du Document')))
            ->add('description', TextType::class,array('attr' => array('placeholder' => 'Description')))
            ->add('confidentialite', IntegerType::class,array('attr' => array('placeholder' => 'Confidentialité')))
            ->add('categorie', TextType::class,array('attr' => array('placeholder' => 'Catégorie')))
            ->add('fichier', FileType::class, array('label' => 'Fichier (PDF file)'))
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Document::class,
        ));
    }

}