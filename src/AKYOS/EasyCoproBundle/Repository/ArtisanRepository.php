<?php

namespace AKYOS\EasyCoproBundle\Repository;

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

}
