<?php

namespace AKYOS\EasyCoproBundle\Repository;

class LocataireRepository extends \Doctrine\ORM\EntityRepository
{
    public function findLocatairesBySyndic($syndic) {

        $qb = $this->createQueryBuilder('loc')
            ->join('loc.lot', 'l')
            ->join('l.copropriete', 'c')
            ->join('c.syndic', 's')
            ->where('s = :syndic')
            ->setParameter('syndic', $syndic)
        ;

        return $qb->getQuery()->getResult();
    }
}
