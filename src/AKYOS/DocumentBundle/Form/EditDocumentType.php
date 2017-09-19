<?php

namespace AKYOS\DocumentBundle\Form;

use AKYOS\DocumentBundle\Entity\Categorie;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\BackofficeBundle\Entity\Syndic;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EditDocumentType extends AbstractType
{
    private $container;
    private $session;

    public function __construct(ContainerInterface $container, SessionInterface $session)
    {
        $this->container = $container;
        $this->session = $session;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $em = $this->container->get('doctrine')->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);
        $categories = $em->getRepository(Categorie::class)->findCategoriesBySyndic($syndic);

        $builder
            ->add('titre', TextType::class,array(
                'attr' => array('placeholder' => 'document.edit.placeholders.title'),
                'label' => 'document.edit.title'
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('placeholder' => 'document.edit.placeholders.description'),
                'label' => 'document.edit.description'
            ))
            ->add('categorie', ChoiceType::class, array(
                'choices' => $categories,
                'choice_label' => function (Categorie $categorie) {
                    return $categorie->getNom();
                },
                'label' => 'document.edit.category',
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'document.edit.submit',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Document::class,
        ));
    }

}