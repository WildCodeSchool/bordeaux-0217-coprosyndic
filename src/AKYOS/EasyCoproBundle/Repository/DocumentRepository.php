<?php

namespace AKYOS\EasyCoproBundle\Repository;

class DocumentRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCategoriesCountBySyndic($syndic) {

        $qb = $this->createQueryBuilder('d')
            ->select('c.nom', 'COUNT(d.nom)')
            ->leftJoin('d.categorie', 'c')
            ->where('d.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ->groupBy('c.nom')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findDocumentsSortedByDate($syndic) {

        $qb = $this->createQueryBuilder('d')
            ->where('d.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ->orderBy('d.dateModif', 'DESC')
        ;

        return $qb->getQuery()->getResult();
    }

}
