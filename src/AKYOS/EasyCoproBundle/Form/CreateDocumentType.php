<?php

namespace AKYOS\EasyCoproBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AKYOS\EasyCoproBundle\Entity\Document;

class CreateDocumentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,array(
                'attr' => array('placeholder' => 'Nom du Document')
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('placeholder' => 'Description')
            ))
            ->add('fichier', FileType::class, array(
                'label' => 'Fichier (PDF file)'
                ))
            ->add('categorie', EntityType::class, array(
                'class' => 'AKYOS\EasyCoproBundle\Entity\Categorie',
//                'query_builder' => function (EntityRepository $er) {
//                    return $er->findBySyndic($this->session->getUser());
//                },
                'choice_label' => 'nom',
            ))
            ->add('lots', EntityType::class, array(
                'class' => 'AKYOS\EasyCoproBundle\Entity\Lot',
                'choice_label' => 'identifiant',
                'multiple' => true,
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'Ajouter',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Document::class,
        ));
    }


}