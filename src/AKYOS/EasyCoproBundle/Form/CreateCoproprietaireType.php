<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Lot;
use Doctrine\ORM\EntityRepository;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateCoproprietaireType extends AbstractType
{
    private $container;
    private $categorie;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->categorie = $this->container->get('session')->get('copro');
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        //TODO : rajouter un champ 'occupé' (ou 'libre) dans la table 'Lot' pour savoir s'il y a déjà un copropriétaire
        //TODO : à l'enregistrement d'un copropriétaire, modifier la valeur du champ 'occupé'.
        $builder
            ->add('user', CreateUserType::class)
            ->add('commentSyndic', TextType::class,array(
                'attr' => array('placeholder' => 'Note du Syndic'),
                'required' => false,
                ))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email du copropriétaire')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du copropriétaire')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom du copropriétaire')))
            ->add('adressePrinc', TextType::class)
            ->add('codePostal',TextType::class)
            ->add('ville',TextType::class)
            ->add('telephone', TextType::class,array('attr' => array('placeholder' => 'Télephone du copropriétaire')))
            ->add('rib', TextType::class,array('attr' => array('placeholder' => 'RIB du copropriétaire')))
            ->add('nbEnfants', IntegerType::class,array(
                'attr' => array('placeholder' => 'Nombre d\'enfants'),
            ))
            ->add('dateArrivee', DateType::class, array(
                'widget' => 'single_text',
                'label' => 'Date d\'emménagement',
                ))
            ->add('dateDepart', DateType::class, array(
                'widget' => 'single_text',
                'label' => 'Date de départ',
                'required' => false,
                ))
            ->add('actuel', CheckboxType::class, array(
                'label'    => 'Locataire Actuel',
                'required' => false,
                ))
            ->add('membreConseil', CheckboxType::class, array(
                'label'    => 'Membre du Conseil',
            ))
            ->add('lot', EntityType::class, array(
                'class'=> Lot::class,
                'query_builder' => function (EntityRepository $er) {
                   return $er->createQueryBuilder('l')
                       ->where('l.copropriete = :copropriete')
                       ->setParameter('copropriete', $this->categorie);
                   },
                'choice_label'=>function($lot){
                    return $lot->getIdentifiant();
                }
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'Créer le compte',
            ))
        ;
        
    }


    public function getBlockPrefix()
    {
        return 'akyos_easycoprobundle_copro';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Coproprietaire::class,
        ));
    }
}