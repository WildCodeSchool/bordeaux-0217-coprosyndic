<?php

namespace AKYOS\EasyCoproBundle\Repository;

class LocataireRepository extends \Doctrine\ORM\EntityRepository
{

    public function findNbrLocatairesBySyndic($syndic)
    {

        $qb = $this->createQueryBuilder('l')
            ->select('COUNT(l)')
            ->join('l.lot', 'll')
            ->join('ll.copropriete', 'llc')
            ->join('llc.syndic', 's')
            ->where('s = :syndic')
            ->setParameter('syndic', $syndic);

        return $qb->getQuery()->getSingleScalarResult();
    }

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
