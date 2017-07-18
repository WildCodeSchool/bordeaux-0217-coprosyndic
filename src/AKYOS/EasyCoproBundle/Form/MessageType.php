<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Repository\SyndicRepository;
use AKYOS\EasyCoproBundle\Repository\UserRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\User;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MessageType extends AbstractType
{
    private $container;
    private $type;
    private $userAccount;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        $em = $this->container->get('doctrine')->getManager();
        $type = $user->getType();
        if ($type == 'SYNDIC') {
            $this->userAccount = $em->getRepository(Syndic::class)->findOneByUser($user);
        } elseif ($type == 'COPRO') {
            $this->userAccount = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
        } elseif ($type == 'LOC') {
            $this->userAccount = $em->getRepository(Locataire::class)->findOneByUser($user);
        } elseif ($type == 'ARTISAN') {
            $this->userAccount = $em->getRepository(Artisan::class)->findOneByUser($user);
        } else {
            $this->userAccount = null;
        }
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextareaType::class)
            ->add('contenu', TextareaType::class)
            ->add('destinataireCompte', ChoiceType::class, array(
                'choices' => array(
                    'Syndic' => 'SYNDIC',
                    'Coproprietaire' => 'COPRO',
                    'Locataire' => 'LOC',
                    'Fournisseur' => 'ARTISAN'),
                'expanded' => true,
            ))
            ->add('send', SubmitType::class, array(
                'label' => 'Envoyer',
            ))
            ;

        $formModifier = function (FormInterface $form, $destinataireCompte = null) {
            //var_dump($choixCompte);
            if ($destinataireCompte == 'SYNDIC')
            {
                if ($this->type == 'COPRO' || $this->type == 'LOC') {
                    $syndic = $this->userAccount->getLot()->getCopropropriete()->getSyndic();
                    $destinataires = array($syndic->getUser());
                } elseif ($this->type == 'ARTISAN') {
                    $syndic = $this->userAccount->getSyndic();
                    $destinataires = array($syndic->getUser());
                } else {
                    $destinataires = array();
                }
                var_dump($destinataires);
                $form->add('destinataire', EntityType::class, array(
                    'class' => 'AKYOS\EasyCoproBundle\Entity\User',
                    'choices' => $destinataires,
                    'choice_label' => function (User $user) {
//                        $em = $this->container->get('doctrine')->getManager();
//                        $coproprietaire = $em->getRepository(Coproprietaire::class)->findActuelCoproprietaire($lot);
                        return null === $user ? 'Aucun choix' : $user->getUsername();
                    },
                    'label' => 'Destinataire',
                    'multiple' => false,
                ));
            } else {
                $form->add('destinataire');
            }
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $destinataireCompte = $event->getData();
//                var_dump($destinataireCompte);
//                $data = $event->getData();
                $formModifier($event->getForm(), $destinataireCompte);
            }
        );

        $builder->get('destinataireCompte')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $destinataireCompte = $event->getForm()->getData();
                //var_dump($destinataireCompte);
                $formModifier($event->getForm()->getParent(), $destinataireCompte);
            }
        );

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\EasyCoproBundle\Entity\Message',
        ));
    }
}