<?php

namespace AKYOS\BackofficeBundle\Repository;

class ArtisanRepository extends \Doctrine\ORM\EntityRepository
{
    public function findSyndicArtisansBySearch($syndic, $search) {
        $qb = $this->createQueryBuilder('a')
            ->where('a.syndic = :syndic')
            ->andWhere('a.raisonSociale LIKE :search')
            ->orWhere('a.contactNom LIKE :search')
            ->setParameters(array('syndic'=>$syndic, 'search'=>'%'.$search.'%'))
        ;

        return $qb->getQuery()->getResult();
    }

    public function findNbrArtisansByCopropriete($copropriete){

        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a)')
            ->where('a.copropriete = :copropriete')
            ->setParameter('copropriete', $copropriete);
        return $qb->getQuery()->getSingleScalarResult();
    }

}
