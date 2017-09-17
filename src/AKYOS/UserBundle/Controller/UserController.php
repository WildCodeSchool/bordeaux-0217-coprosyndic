<?php

namespace AKYOS\UserBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    private $accountsEnities = [
        'syndic'         => Syndic::class,
        'coproprietaire' => Coproprietaire::class,
        'locataire'      => Locataire::class,
        'artisan'        => Artisan::class,
    ];

    public function connectAction(Request $request)
    {

        $user        = $this->get('security.token_storage')->getToken()->getUser();
        $accountType = $user->getType();

        if ($accountType !== 'admin') {
            $em          = $this->getDoctrine()->getManager();
            $accountRepo = $em->getRepository($this->accountsEnities[$accountType]);
            $account     = $accountRepo->findByUser($user);

            $request->getSession()->set('user_account', $account);
        }

        return $this->redirectToRoute($accountType . '_index');
    }
}
