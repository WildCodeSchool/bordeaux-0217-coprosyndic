<?php

namespace AKYOS\EasyCoproBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditCoproprietaireType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', ProfileFormType::class)
            ->add('commentSyndic')
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('rib')
            ->add('nbEnfants')
            ->add('dateArrivee', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('dateDepart', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('actuel')
            ->add('membreConseil')
            ->add('submit',SubmitType::class, array(
                'label'=>'Mettre à jour',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Coproprietaire'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_easy_copro_backend_syndic_editCopro';
    }


}