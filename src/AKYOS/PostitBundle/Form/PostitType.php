<?php

namespace AKYOS\PostitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostitType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, array(
                'label' => 'postit.new.content'
            ))
            ->add('submit',SubmitType::class, array(
                'label'=>'postit.new.submit',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\PostitBundle\Entity\Postit'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_postitbundle_postit';
    }


}
