<?php

namespace AKYOS\DocumentBundle\Repository;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function countByCategorieByUser(User $user)
    {
        $qb = $this->createQueryBuilder('c')
                   ->select('c.id', 'c.nom', 'COUNT(d.nom) AS nombre')
                   ->leftJoin('c.documents', 'd')
                   ->groupBy('c.id', 'c.nom');

        $em          = $this->getEntityManager();
        $accountType = $user->getType();

        if ($accountType == 'syndic') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);

            $qb->where('c.syndic = :syndic')
               ->setParameter('syndic', $syndic);

        } elseif ($accountType == 'coproprietaire') {
            $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $lot            = $coproprietaire->getLot();

            $qb->leftJoin('d.lots', 'l')
               ->where('l = :lot')
               ->setParameter('lot', $lot);

        } elseif ($accountType == 'locataire') {
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
            $lot       = $locataire->getLot();

            $qb->leftJoin('d.lots', 'l')
               ->where('l = :lot')
               ->andWhere('d.toLocataires = true')
               ->setParameter('lot', $lot);

        } elseif ($accountType == 'artisan') {
            $artisan = $em->getRepository(Artisan::class)->findOneByUser($user);

            $qb->leftJoin('d.artisans', 'a')
               ->where('a = :artisan')
               ->setParameter('artisan', $artisan);
        }

        return $qb->getQuery()->getArrayResult();
    }
}
