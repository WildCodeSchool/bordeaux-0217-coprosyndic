<?php

namespace AKYOS\EasyCoproBundle\Form;

use Faker\Provider\Text;
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
                'label' => 'Nom',
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Description',
            ))
            ->add('couleur', TextType::class, array(
                'label' => 'Vignette',
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Ajouter',
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Categorie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_categorie';
    }


}
