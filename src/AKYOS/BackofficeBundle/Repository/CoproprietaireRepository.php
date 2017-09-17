<?php

namespace AKYOS\BackofficeBundle\Repository;

class CoproprietaireRepository extends \Doctrine\ORM\EntityRepository
{

    public function findNbrCoproprietairesBySyndic($syndic){

        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c)')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'lc')
            ->join('lc.syndic', 'lcs')
            ->where('lcs = :syndic')
            ->setParameter('syndic', $syndic);
            return $qb->getQuery()->getScalarResult();
    }

    public function findNbrCoproprietairesBySyndicByCopropriete($syndic, $copropriete){

        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c)')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'lc')
            ->join('lc.syndic', 'lcs')
            ->where('lcs = :syndic')
            ->andWhere('lc = :copropriete')
            ->andWhere('c.actuel = true')
            ->setParameters(array('syndic' => $syndic, 'copropriete' => $copropriete));
        return $qb->getQuery()->getSingleScalarResult();
    }


    public function findCoproprietairesBySyndic($syndic) {

        $qb = $this->createQueryBuilder('c')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'cop')
            ->join('cop.syndic', 's')
            ->where('s = :syndic')
            ->setParameter('syndic', $syndic)
        ;

        return $qb->getQuery()->getResult();
    }

    public function findActuelCoproprietaire($lot) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.lot = :lot')
            ->andWhere('c.actuel = :actuel')
            ->setParameters(array('lot' => $lot, 'actuel' => true))
        ;

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findCoproprietairesByCopropriete($copropriete) {

        $qb = $this->createQueryBuilder('c')
            ->join('c.lot', 'l')
            ->where('l.copropriete = :copropriete')
            ->andWhere('c.actuel = true')
            ->setParameter('copropriete', $copropriete)
        ;

        return $qb->getQuery()->getResult();
    }

    public function findNbrCoproprietairesByCopropriete($copropriete){

        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c)')
            ->join('c.lot', 'l')
            ->join('l.copropriete', 'lc')
            ->where('lc = :copropriete')
            ->andWhere('c.actuel = true')
            ->setParameter('copropriete', $copropriete);
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function findSyndicCoproprietairesBySearch($syndic, $search) {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.lot', 'l')
            ->leftJoin('l.copropriete','lc')
            ->leftJoin('lc.syndic', 's')
            ->where('s = :syndic')
            ->andWhere('c.nom LIKE :search')
            ->setParameters(array('syndic'=>$syndic, 'search'=>'%'.$search.'%'))
        ;

        return $qb->getQuery()->getResult();
    }

    public function findCoproprietairesActuelsBySyndic($syndic) {

        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.lot', 'l')
            ->leftJoin('l.copropriete','ce')
            ->where('c.actuel = true')
            ->andWhere('ce.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ;

        return $qb->getQuery()->getResult();
    }

    public function findCoproprietairesActuelsByCopropriete($copropriete) {

        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.lot', 'l')
            ->where('c.actuel = true')
            ->andWhere('l.copropriete = :copropriete')
            ->setParameter('copropriete', $copropriete)
        ;

        return $qb->getQuery()->getResult();
    }
    
}
