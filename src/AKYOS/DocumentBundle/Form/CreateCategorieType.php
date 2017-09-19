<?php

namespace AKYOS\DocumentBundle\Form;

use AKYOS\DocumentBundle\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateCategorieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'category.new.name',
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'category.new.description',
            ))
            ->add('couleur', TextType::class, array(
                'label' => 'category.new.color',
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'category.new.submit',
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Categorie::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'akyos_document_categorie';
    }


}
