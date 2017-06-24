<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AKYOS\EasyCoproBundle\Entity\Document;

class CreateDocumentType extends AbstractType
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
        $categories = $em->getRepository(Categorie::class)->findCategorieBySyndic($syndic);
        $coproprietes = $syndic->getCoproprietes();

        $builder
            ->add('nom', TextType::class,array(
                'attr' => array('placeholder' => 'Saisissez le nom ...'),
                'label' => 'Nom du document'
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('placeholder' => 'Saisissez la description ...'),
                'label' => 'Description'
            ))
            ->add('fichier', FileType::class, array(
                'label' => 'Fichier'
                ))
            ->add('categorie', ChoiceType::class, array(
                'choices' => $categories,
                'choice_label' => function ($categorie) {
                    return $categorie->getNom();
                },
                'label' => 'Catégorie',
            ))
            ->add('copropriete', ChoiceType::class, array(
                'choices' => $coproprietes,
                'choice_label' => function ($copropriete) {
                    return $copropriete->getNom();
                },
                'label' => 'Destinataire(s)',
                'mapped' => false,
            ))
            ->add('lots', EntityType::class, array(
                'class' => 'AKYOS\EasyCoproBundle\Entity\Lot',
                'choice_label' => 'identifiant',
                'multiple' => true,
                'label' => 'Destinataire(s)',
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