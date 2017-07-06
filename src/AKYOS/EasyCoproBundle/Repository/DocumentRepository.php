<?php

namespace AKYOS\EasyCoproBundle\Repository;

class DocumentRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCategoriesCountBySyndic($syndic) {

        $qb = $this->createQueryBuilder('d')
            ->select('c.nom', 'c.id', 'COUNT(d.nom)')
            ->leftJoin('d.categorie', 'c')
            ->where('c.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ->groupBy('c.nom', 'c.id')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findSyndicDocumentsSortedByDate($syndic) {

        $qb = $this->createQueryBuilder('d')
            ->where('d.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ->orderBy('d.dateModif', 'desc')
        ;

        return $qb->getQuery()->getResult();
    }


    public function findArtisanDocumentsSortedByDate($artisan) {

        $qb = $this->createQueryBuilder('d')
            ->where('d.artisan = :artisan')
            ->setParameter('artisan', $artisan)
            ->orderBy('d.dateModif', 'desc')
        ;

        return $qb->getQuery()->getResult();
    }

    public function findDocumentsByCategorie($categorie) {

        $qb = $this->createQueryBuilder('d')
            ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
            ->join('d.categorie', 'c')
            ->where('c = :categorie')
            ->setParameter('categorie', $categorie)
            ->orderBy('d.dateAjout', 'desc')
        ;

        return $qb->getQuery()->getArrayResult();
    }
    public function findAllDocumentsBySyndic($syndic) {

        $qb = $this->createQueryBuilder('d')
            ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
            ->join('d.categorie', 'c')
            ->where('c.syndic = :syndic')
            ->setParameter('syndic', $syndic)
            ->orderBy('d.dateAjout', 'desc')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findCategoriesCountByLot($lot) {

        $qb = $this->createQueryBuilder('d')
            ->select('c.nom', 'COUNT(d.nom)')
            ->leftJoin('d.categorie', 'c')
            ->leftJoin('d.lots', 'l')
            ->where('l = :lot')
            ->setParameter('lot', $lot)
            ->groupBy('c.nom')
        ;

        return $qb->getQuery()->getArrayResult();
    }

    public function findLotDocumentsSortedByDate($lot) {

        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.lots', 'l')
            ->where('l = :lot')
            ->setParameter('lot', $lot)
            ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }

    public function findDocumentsByCopropriete($copropriete) {

        $qb = $this->createQueryBuilder('d')
            ->where('d.copropriete = :copropriete')
            ->setParameter('copropriete', $copropriete)
        ;

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
         ->setParameter('syndic', $syndic)
         ;
        return $qb->getQuery()->getResult();

    }

    public function findAllDocumentsByArtisan($artisan) {

        $qb = $this->createQueryBuilder('d')
            ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
            ->join('d.categorie', 'c')
            ->where('c.artisan = :artisan')
            ->setParameter('artisan', $artisan)
            ->orderBy('d.dateAjout', 'desc')
        ;

        return $qb->getQuery()->getArrayResult();
    }
}
