<?php

namespace AKYOS\DocumentBundle\Repository;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class DocumentRepository extends EntityRepository
{
    public function findAllByUser(User $user)
    {
        $qb = $this->createQueryBuilder('d')
                   ->orderBy('d.dateAjout', 'desc');

        $em          = $this->getEntityManager();
        $accountType = $user->getType();

        if ($accountType == 'syndic') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);

            $qb->where('d.syndic = :syndic')
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

        return $qb->getQuery()->getResult();
    }

    public function findAllByCategorie($categorieId, User $user)
    {
        $qb = $this->createQueryBuilder('d')
                   ->addSelect('c')
                   ->join('d.category', 'c')
                   ->orderBy('d.dateAjout', 'desc');

        $em          = $this->getEntityManager();
        $accountType = $user->getType();
        $parameters  = [];

        if ($accountType == 'syndic') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);

            $qb->andWhere('d.syndic = :syndic');
            $parameters['syndic'] = $syndic;

        } elseif ($accountType == 'coproprietaire') {
            $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $lot            = $coproprietaire->getLot();

            $qb->leftJoin('d.lots', 'l')
               ->andWhere('l = :lot');
            $parameters['lot'] = $lot;

        } elseif ($accountType == 'locataire') {
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
            $lot       = $locataire->getLot();

            $qb->leftJoin('d.lots', 'l')
               ->andWhere('l = :lot')
               ->andWhere('d.toLocataires = true');
            $parameters['lot'] = $lot;

        } elseif ($accountType == 'artisan') {
            $artisan = $em->getRepository(Artisan::class)->findOneByUser($user);

            $qb->leftJoin('d.artisans', 'a')
               ->andWhere('a = :artisan');
            $parameters['artisan'] = $artisan;
        }

        if ($categorieId !== 'all') {
            $qb->andWhere('c.id = :category');
            $parameters['category'] = $categorieId;
        }

        if (!empty($parameters)) {
            $qb->setParameters($parameters);
        }

        return $qb->getQuery()->getArrayResult();
    }

    public function countByUser(User $user)
    {
        $qb = $this->createQueryBuilder('d')
                   ->select('COUNT(d)');

        $em          = $this->getEntityManager();
        $accountType = $user->getType();

        if ($accountType == 'syndic') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);

            $qb->where('d.syndic = :syndic')
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

        return $qb->getQuery()->getSingleScalarResult();
    }

//    ----------------------------------------------


    public function findDocumentsByCopropriete($copropriete)
    {

        $qb = $this->createQueryBuilder('d')
                   ->where('d.copropriete = :copropriete')
                   ->setParameter('copropriete', $copropriete);

        return $qb->getQuery()->getResult();
    }

    public function findNbreDocumentByCoproprieteBySyndic($syndic)
    {
        $qb = $this->createQueryBuilder('d')
                   ->select('c.nom', 'count(d.nom)')
                   ->join('d.syndic', 's')
                   ->join('s.coproprietes', 'c')
                   ->groupBy('c.nom')
                   ->where('s = :syndic')
                   ->setParameter('syndic', $syndic);
        return $qb->getQuery()->getResult();

    }

    public function findSyndicDocumentsBySearch($syndic, $search)
    {

        $qb = $this->createQueryBuilder('d')
                   ->where('d.syndic = :syndic')
                   ->andWhere('d.titre LIKE :search')
                   ->setParameters(array('syndic' => $syndic, 'search' => '%' . $search . '%'))
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }
}
