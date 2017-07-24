<?php

namespace AKYOS\EasyCoproBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function findCategoriesCountBySyndic($syndic) {

        $qb = $this->createQueryBuilder('c')
            ->select('c', 'COUNT(d.nom)')
            ->leftJoin('c.documents', 'd')
            ->where('c.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ->groupBy('c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findCategoriesCountByLot($lot) {

        $qb = $this->createQueryBuilder('c')
            ->select('c', 'COUNT(d.nom)')
            ->leftJoin('c.documents', 'd')
            ->leftJoin('d.lots','l')
            ->where('l = :lot')
            ->setParameter('lot', $lot)
            ->groupBy('c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findCategoriesCountByLotForLocataires($lot) {

        $qb = $this->createQueryBuilder('c')
            ->select('c', 'COUNT(d.nom)')
            ->leftJoin('c.documents', 'd')
            ->leftJoin('d.lots','l')
            ->where('l = :lot')
            ->andWhere('d.toLocataires = true')
            ->setParameter('lot', $lot)
            ->groupBy('c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

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

    public function findCategoriesCountByArtisan($artisan) {

        $qb = $this->createQueryBuilder('c')
            ->select('c', 'COUNT(d.nom)')
            ->leftJoin('c.documents', 'd')
            ->leftJoin('d.artisans', 'a')
            ->where('a = :artisan')
            ->setParameter('artisan', $artisan)
            ->groupBy('c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findCategorieByNomAndArtisan($nom, $artisan) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.nom = :nom')
            ->andWhere('c.artisan = :artisan')
            ->setParameters(array('nom' => $nom, 'artisan' => $artisan));

        return $qb->getQuery()->getResult();
    }

    public function findCategorieByArtisan($artisan) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.artisan = :artisan')
            ->setParameter('artisan', $artisan);

        return $qb->getQuery()->getResult();
    }

    public function findCategoriesCountByLocataire($locataire) {

        $qb = $this->createQueryBuilder('c')
            ->select('c', 'COUNT(d.nom)')
            ->leftJoin('c.documents', 'd')
            ->where('c.locataire = :locataire')
            ->setParameter('locataire', $locataire)
            ->groupBy('c')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findCategorieByNomAndLocataire($nom, $locataire) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.nom = :nom')
            ->andWhere('c.locataire = :locataire')
            ->setParameters(array('nom' => $nom, 'locataire' => $locataire));

        return $qb->getQuery()->getResult();
    }

    public function findCategorieByLocataire($locataire) {
        $qb = $this->createQueryBuilder('c')
            ->where('c.locataire = :locataire')
            ->setParameter('locataire', $locataire);

        return $qb->getQuery()->getResult();
    }
}
