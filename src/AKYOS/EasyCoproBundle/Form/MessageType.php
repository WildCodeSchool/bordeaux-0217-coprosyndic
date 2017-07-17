<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Repository\SyndicRepository;
use AKYOS\EasyCoproBundle\Repository\UserRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\User;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('destinataire', EntityType::class, array(
                'class' => 'AKYOSEasyCoproBundle:User',
                'choice_label' => 'username',
                'expanded' => false,
                'multiple' => false))

            ->add('destinataire', EntityType::class, array(
                'class' => 'AKYOSEasyCoproBundle:User',
                'choice_label' => function($user){
                    $type = $user->getType();
                    $em = $this->container->get('doctrine')->getManager();
                    //EXPLICATION POUR CETTE LIGNE
                    if ($type == "COPRO"){
                        //recupère "user" du Repository "Copropriétaire"
                        $name = $em->getRepository("AKYOSEasyCoproBundle:Coproprietaire")->findOneByUser($user);
                        //renvoie 'Copropriétaire' + "Nom" + ' ' + "Prénom" si NON null , sinon renvoie le Username .
                        return "Coproprietaire : " . ($name != null ? $name->getNom()." ".$name->getPrenom() : $user->getUsername());
                    }
                    elseif ($type == "SYNDIC"){
                        $name = $em->getRepository("AKYOSEasyCoproBundle:Syndic")->findOneByUser($user);
                        return "Syndic : " . ($name != null ? $name->getNom()." ".$name->getStatut() : $user->getUsername());
                    }
                    elseif ($type == "LOCATAIRE" || $type == "LOC"){
                        $name = $em->getRepository("AKYOSEasyCoproBundle:Locataire")->findOneByUser($user);
                        return "Locataire : " . ($name != null ? $name->getNom()." ".$name->getPrenom() : $user->getUsername());
                    }
                    elseif ($type == "ARTISAN"){
                        $name = $em->getRepository("AKYOSEasyCoproBundle:Artisan")->findOneByUser($user);
                        return "Artisan : " . ($name != null ? $name->getRaisonSociale()." ( ".$name->getActivite()." )" : $user->getUsername());
                    }
                    else{
                        $name = $em->getRepository("AKYOSEasyCoproBundle:Syndic")->findOneByUser($user);
                        return "Admin : " . ($name != null ? $name->getNom()." ".$name->getStatut() : $user->getUsername());
                    }
                }
            ))

            ->add('titre', TextareaType::class)
            ->add('contenu', TextareaType::class)
            ->add('send', SubmitType::class, array(
                'label' => 'Envoyer',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Message',
        ));
    }
}