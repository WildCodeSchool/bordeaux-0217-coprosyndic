<?php

namespace AKYOS\EasyCoproBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function findCategorieByNomAndSyndic($nom, $syndic) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.nom = :nom')
            ->andWhere('c.syndic = :syndic')
            ->setParameters(array('nom' => $nom, 'syndic' => $syndic));

        return $qb->getQuery()->getResult();
    }

    public function findCategorieBySyndic($syndic) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.syndic = :syndic')
            ->setParameter('syndic', $syndic);

        return $qb->getQuery()->getResult();
    }
}
