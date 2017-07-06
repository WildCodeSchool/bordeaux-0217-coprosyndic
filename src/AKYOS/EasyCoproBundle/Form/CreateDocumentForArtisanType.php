<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Entity\Lot;
use AKYOS\EasyCoproBundle\Entity\Artisan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AKYOS\EasyCoproBundle\Entity\Document;

class CreateDocumentForArtisanType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class,array(
                'attr' => array('placeholder' => 'Saisissez le titre ...'),
                'label' => 'Titre du document'
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('placeholder' => 'Saisissez la description ...'),
                'label' => 'Description'
            ))
            ->add('fichier', FileType::class, array(
                'label' => 'Fichier'
                ))
            ->add('toLocataires', CheckboxType::class, array(
                'label' => 'Diffuser également aux locataires ?',
                'label_attr' => array('class' => 'control-label', 'style' => 'margin-right: 15px;'),
                'required' => false,
                'mapped' => false,
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'Ajouter',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Document::class,
        ));
    }

}