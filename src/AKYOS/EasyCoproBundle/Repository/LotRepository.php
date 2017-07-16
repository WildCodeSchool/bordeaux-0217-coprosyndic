<?php

namespace AKYOS\EasyCoproBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LotRepository extends EntityRepository
{
    public function findAllByCopropriete($copropriete) {
        $qb = $this->createQueryBuilder('l')
            ->select('l.id','c.nom, c.prenom')
            ->join('l.coproprietaires', 'c')
            ->where('l.copropriete = :copropriete')
            ->setParameter('copropriete', $copropriete)
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findSyndicLotsBySearch($syndic, $search) {
        $qb = $this->createQueryBuilder('l')
            ->leftJoin('l.copropriete','c')
            ->leftJoin('c.syndic', 's')
            ->where('s = :syndic')
            ->andWhere('l.identifiant LIKE :search')
            ->setParameters(array('syndic'=>$syndic, 'search'=>'%'.$search.'%'))
        ;

        return $qb->getQuery()->getResult();
    }


}
