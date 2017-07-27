<?php

namespace AKYOS\EasyCoproBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Message;
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
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    private $container;
    private $type;
    private $userAccount;
    private $choices;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        $em = $this->container->get('doctrine')->getManager();
        $this->type = $user->getType();
        if ($this->type == 'ADMIN') {
            $this->choices = array('Syndic' => 'SYNDIC', 'Coproprietaire' => 'COPRO', 'Locataire' => 'LOC', 'Fournisseur' => 'ARTISAN');
        } elseif ($this->type == 'SYNDIC') {
            $this->userAccount = $em->getRepository(Syndic::class)->findOneByUser($user);
            $this->choices = array('Coproprietaire' => 'COPRO','Locataire' => 'LOC','Fournisseur' => 'ARTISAN');
        } elseif ($this->type == 'COPRO') {
            $this->userAccount = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $this->choices = array('Syndic' => 'SYNDIC', 'Coproprietaire' => 'COPRO','Locataire' => 'LOC','Fournisseur' => 'ARTISAN');
        } elseif ($this->type == 'LOC') {
            $this->userAccount = $em->getRepository(Locataire::class)->findOneByUser($user);
            $this->choices = array('Syndic' => 'SYNDIC', 'Coproprietaire' => 'COPRO','Locataire' => 'LOC','Fournisseur' => 'ARTISAN');
        } elseif ($this->type == 'ARTISAN') {
            $this->userAccount = $em->getRepository(Artisan::class)->findOneByUser($user);
            $this->choices = array('Syndic' => 'SYNDIC', 'Coproprietaire' => 'COPRO','Locataire' => 'LOC');
        } else {
            $this->userAccount = null;
            $this->choices = null;
        }
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('contenu', TextareaType::class)
            ->add('destinataireCompte', ChoiceType::class, array(
                'choices' => $this->choices,
                'expanded' => false,
                'label' => 'Type de compte',
            ))
            ->add('send', SubmitType::class, array(
                'label' => 'Envoyer',
            ))
            ;

        $formModifier = function (FormInterface $form, $destinataireCompte = null) {

            $destinataires = array();
            if ($destinataireCompte == 'SYNDIC') {

                if ($this->type == 'COPRO' || $this->type == 'LOC') {
                    $syndic = $this->userAccount->getLot()->getCopropriete()->getSyndic();
                    $destinataires = array($syndic->getUser());
                } elseif ($this->type == 'ARTISAN') {
                    $syndic = $this->userAccount->getSyndic();
                    $destinataires = array($syndic->getUser());
                }
            }
            elseif ($destinataireCompte == 'COPRO') {

                $em = $this->container->get('doctrine')->getManager()->getRepository(Coproprietaire::class);
                if ($this->type == 'SYNDIC') {
                    $coproprietaires = $em->findCoproprietairesActuelsBySyndic($this->userAccount);
                    foreach ($coproprietaires as $coproprietaire) {
                        $destinataires[] = $coproprietaire->getUser();
                    }
                } elseif ($this->type == 'COPRO' | $this->type == 'LOC') {
                    $coproprietaires = $em->findCoproprietairesActuelsByCopropriete($this->userAccount->getLot()->getCopropriete());
                    foreach ($coproprietaires as $coproprietaire) {
                        $destinataires[] = $coproprietaire->getUser();
                    }
                } elseif ($this->type == 'ARTISAN') {
                    $coproprietaires = $em->findCoproprietairesActuelsByCopropriete($this->userAccount->getCopropriete());
                    foreach ($coproprietaires as $coproprietaire) {
                        $destinataires[] = $coproprietaire->getUser();
                    }
                }
            }
            elseif ($destinataireCompte == 'LOC') {

                $em = $this->container->get('doctrine')->getManager()->getRepository(Locataire::class);
                if ($this->type == 'SYNDIC') {
                    $locataires = $em->findLocatairesActuelsBySyndic($this->userAccount);
                    foreach ($locataires as $locataire) {
                        $destinataires[] = $locataire->getUser();
                    }
                } elseif ($this->type == 'COPRO' | $this->type == 'LOC') {
                    $locataires = $em->findLocatairesActuelsByCopropriete($this->userAccount->getLot()->getCopropriete());
                    foreach ($locataires as $locataire) {
                        $destinataires[] = $locataire->getUser();
                    }
                } elseif ($this->type == 'ARTISAN') {
                    $locataires = $em->findLocatairesActuelsByCopropriete($this->userAccount->getCopropriete());
                    foreach ($locataires as $locataire) {
                        $destinataires[] = $locataire->getUser();
                    }
                }
            }
            elseif ($destinataireCompte == 'ARTISAN') {

                if ($this->type == 'SYNDIC') {
                    $artisans = $this->userAccount->getArtisans();
                    foreach ($artisans as $artisan) {
                        $destinataires[] = $artisan->getUser();
                    }
                } elseif ($this->type == 'COPRO' | $this->type == 'LOC') {
                    $artisans = $this->userAccount->getLot()->getCopropriete()->getArtisans();
                    foreach ($artisans as $artisan) {
                        $destinataires[] = $artisan->getUser();
                    }
                }
            }

            $form->add('destinataire', EntityType::class, array(
                'class' => 'AKYOS\EasyCoproBundle\Entity\User',
                'choices' => $destinataires,
                'choice_label' => function (User $user) {
                    $em = $this->container->get('doctrine');
                    $type = $user->getType();
                    $label = '';
                    if ($type == 'SYNDIC') {
                        $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);
                        $label =  $syndic->getNom();
                    } elseif ($type == 'COPRO') {
                        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
                        $label =  $coproprietaire->getNom().' '.$coproprietaire->getPrenom();
                    } elseif ($type == 'LOC') {
                        $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
                        $label =  $locataire->getNom().' '.$locataire->getPrenom();
                    } elseif ($type == 'ARTISAN') {
                        $artisan = $em->getRepository(Artisan::class)->findOneByUser($user);
                        $label =  $artisan->getRaisonSociale();
                    }
                    return null === $user ? 'Aucun destinataire' : $label;
                },
                'label' => 'Destinataire',
                'multiple' => false,
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getDestinataireCompte());
            }
        );

        $builder->get('destinataireCompte')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $destinataireCompte = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $destinataireCompte);
            }
        );

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Message::class,
        ));
    }
}