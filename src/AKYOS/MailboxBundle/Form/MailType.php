<?php

namespace AKYOS\MailboxBundle\Form;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailType extends AbstractType
{
    private $container;
    private $type;
    private $userAccount;
    private $choices;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->type = $container->get('akyos.mailbox.recipient_choices')->getType();
        $this->userAccount = $container->get('akyos.mailbox.recipient_choices')->getUserAccount();
        $this->choices = $container->get('akyos.mailbox.recipient_choices')->getChoices();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject', TextType::class, array(
                'label' => 'mail.new.subject',
            ))
            ->add('content', TextareaType::class, array(
                'label' => 'mail.new.content',
            ))
            ->add('recipientType', ChoiceType::class, array(
                'choices' => $this->choices,
                'label' => 'mail.new.recipientType',
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'mail.new.submit'
            ))
        ;

        $formModifier = function (FormInterface $form, $recipientType = null) {

            $availableRecipients = array();
            if ($recipientType == 'syndic') {

                if ($this->type == 'coproprietaire' || $this->type == 'locataire') {
                    $syndic = $this->userAccount->getLot()->getCopropriete()->getSyndic();
                    $availableRecipients = array($syndic->getUser());
                } elseif ($this->type == 'artisan') {
                    $syndic = $this->userAccount->getSyndic();
                    $availableRecipients = array($syndic->getUser());
                }
            }
            elseif ($recipientType == 'coproprietaire') {

                $em = $this->container->get('doctrine')->getManager()->getRepository(Coproprietaire::class);
                if ($this->type == 'syndic') {
                    $coproprietaires = $em->findCoproprietairesActuelsBySyndic($this->userAccount);
                    foreach ($coproprietaires as $coproprietaire) {
                        $availableRecipients[] = $coproprietaire->getUser();
                    }
                } elseif ($this->type == 'coproprietaire' | $this->type == 'locataire') {
                    $coproprietaires = $em->findCoproprietairesActuelsByCopropriete($this->userAccount->getLot()->getCopropriete());
                    foreach ($coproprietaires as $coproprietaire) {
                        $availableRecipients[] = $coproprietaire->getUser();
                    }
                } elseif ($this->type == 'artisan') {
                    $coproprietaires = $em->findCoproprietairesActuelsByCopropriete($this->userAccount->getCopropriete());
                    foreach ($coproprietaires as $coproprietaire) {
                        $availableRecipients[] = $coproprietaire->getUser();
                    }
                }
            }
            elseif ($recipientType == 'locataire') {

                $em = $this->container->get('doctrine')->getManager()->getRepository(Locataire::class);
                if ($this->type == 'syndic') {
                    $locataires = $em->findLocatairesActuelsBySyndic($this->userAccount);
                    foreach ($locataires as $locataire) {
                        $availableRecipients[] = $locataire->getUser();
                    }
                } elseif ($this->type == 'coproprietaire' | $this->type == 'locataire') {
                    $locataires = $em->findLocatairesActuelsByCopropriete($this->userAccount->getLot()->getCopropriete());
                    foreach ($locataires as $locataire) {
                        $availableRecipients[] = $locataire->getUser();
                    }
                } elseif ($this->type == 'artisan') {
                    $locataires = $em->findLocatairesActuelsByCopropriete($this->userAccount->getCopropriete());
                    foreach ($locataires as $locataire) {
                        $availableRecipients[] = $locataire->getUser();
                    }
                }
            }
            elseif ($recipientType == 'artisan') {

                if ($this->type == 'syndic') {
                    $artisans = $this->userAccount->getArtisans();
                    foreach ($artisans as $artisan) {
                        $availableRecipients[] = $artisan->getUser();
                    }
                } elseif ($this->type == 'coproprietaire' | $this->type == 'locataire') {
                    $artisans = $this->userAccount->getLot()->getCopropriete()->getArtisans();
                    foreach ($artisans as $artisan) {
                        $availableRecipients[] = $artisan->getUser();
                    }
                }
            }

            $form->add('recipient', EntityType::class, array(
                'class' => 'AKYOS\EasyCoproBundle\Entity\User',
                'label' => 'mail.new.recipient',
                'choices' => $availableRecipients,
                'choice_label' => function (User $user) {
                    $em = $this->container->get('doctrine');
                    $type = $user->getType();
                    $label = '';
                    if ($type == 'syndic') {
                        $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);
                        $label =  $syndic->getNom();
                    } elseif ($type == 'coproprietaire') {
                        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
                        $label =  $coproprietaire->getNom().' '.$coproprietaire->getPrenom();
                    } elseif ($type == 'locataire') {
                        $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
                        $label =  $locataire->getNom().' '.$locataire->getPrenom();
                    } elseif ($type == 'artisan') {
                        $artisan = $em->getRepository(Artisan::class)->findOneByUser($user);
                        $label =  $artisan->getRaisonSociale();
                    }
                    return null === $user ? 'Aucun destinataire' : $label;
                },
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getRecipientType());
            }
        );

        $builder->get('recipientType')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $recipientType = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $recipientType);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AKYOS\MailboxBundle\Entity\Mail'
        ));
    }

    public function getBlockPrefix()
    {
        return 'akyos_mailboxbundle_mail';
    }


}
