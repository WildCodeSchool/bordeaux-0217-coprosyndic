<?php

namespace AKYOS\DocumentBundle\Repository;

use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class DocumentRepository extends EntityRepository
{

    public function findDocumentsByUser(User $user)
    {
        $qb = $this->createQueryBuilder('d')
                   ->orderBy('d.dateModif', 'desc');

        $em          = $this->getEntityManager();
        $accountType = $user->getType();

        if ($accountType == 'syndic') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);

            $qb->where('d.syndic = :syndic')
               ->setParameter('syndic', $syndic);

        } elseif ($accountType == 'coproprietaire') {
            $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $lot            = $coproprietaire->getLot();

            $qb->leftJoin('d.lots', 'l')
               ->where('l = :lot')
               ->setParameter('lot', $lot);

        } elseif ($accountType == 'locataire') {
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
            $lot       = $locataire->getLot();

            $qb->leftJoin('d.lots', 'l')
               ->where('l = :lot')
               ->andWhere('d.toLocataires = true')
               ->setParameter('lot', $lot);
        }

        return $qb->getQuery()->getResult();
    }

    public function findSyndicDocumentsSortedByDate($syndic)
    {
        $qb = $this->createQueryBuilder('d')
                   ->where('d.syndic = :syndic')
                   ->setParameter('syndic', $syndic)
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }

    public function findArtisanDocumentsSortedByDate($artisan)
    {

        $qb = $this->createQueryBuilder('d')
                   ->leftJoin('d.artisans', 'a')
                   ->where('a = :artisan')
                   ->setParameter('artisan', $artisan)
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }

    public function findLocataireDocumentsSortedByDate($locataire)
    {

        $qb = $this->createQueryBuilder('d')
                   ->where('d.locataire = :locataire')
                   ->setParameter('locataire', $locataire)
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }

    public function findDocumentsByCategorie($categorie)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->join('d.categorie', 'c')
                   ->where('c = :categorie')
                   ->setParameter('categorie', $categorie)
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findLotDocumentsByCategorie($categorie, $lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->leftjoin('d.categorie', 'c')
                   ->leftJoin('d.lots', 'l')
                   ->where('c = :categorie')
                   ->andWhere('l = :lot')
                   ->setParameters(array('categorie' => $categorie, 'lot' => $lot))
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findLotDocumentsByCategorieForLocataires($categorie, $lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->leftjoin('d.categorie', 'c')
                   ->leftJoin('d.lots', 'l')
                   ->where('c = :categorie')
                   ->andWhere('l = :lot')
                   ->andWhere('d.toLocataires = true')
                   ->setParameters(array('categorie' => $categorie, 'lot' => $lot))
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findAllDocumentsBySyndic($syndic)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->join('d.categorie', 'c')
                   ->where('c.syndic = :syndic')
                   ->setParameter('syndic', $syndic)
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findAllDocumentsByLot($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->leftjoin('d.categorie', 'c')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->setParameter('lot', $lot)
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findAllDocumentsByLotForLocataires($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->leftjoin('d.categorie', 'c')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->andWhere('d.toLocataires = true')
                   ->setParameter('lot', $lot)
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findCategoriesCountByLot($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('c.nom', 'COUNT(d.nom)')
                   ->leftJoin('d.categorie', 'c')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->setParameter('lot', $lot)
                   ->groupBy('c.nom');

        return $qb->getQuery()->getArrayResult();
    }

    public function findLotDocumentsSortedByDate($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->setParameter('lot', $lot)
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }

    public function findLotDocumentsSortedByDateForLocataires($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->andWhere('d.toLocataires = true')
                   ->setParameter('lot', $lot)
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }

    public function findNbDocumentsByLot($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('COUNT(d)')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->setParameter('lot', $lot);

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function findNbDocumentsByLotForLocataire($lot)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('COUNT(d)')
                   ->leftJoin('d.lots', 'l')
                   ->where('l = :lot')
                   ->andWhere('d.toLocataires = true')
                   ->setParameter('lot', $lot);

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function findNbDocumentsByArtisan($artisan)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('COUNT(d)')
                   ->leftJoin('d.artisans', 'a')
                   ->where('a = :artisan')
                   ->setParameter('artisan', $artisan);

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function findDocumentsByCopropriete($copropriete)
    {

        $qb = $this->createQueryBuilder('d')
                   ->where('d.copropriete = :copropriete')
                   ->setParameter('copropriete', $copropriete);

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
                   ->setParameter('syndic', $syndic);
        return $qb->getQuery()->getResult();

    }

    public function findAllDocumentsByArtisan($artisan)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->join('d.categorie', 'c')
                   ->where('c.artisan = :artisan')
                   ->setParameter('artisan', $artisan)
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findAllDocumentsByLocataire($locataire)
    {

        $qb = $this->createQueryBuilder('d')
                   ->select('d.id as doc_id', 'd.titre as doc_titre', 'd.dateAjout', 'c.id as cat_id', 'c.nom as cat_nom', 'c.couleur')
                   ->join('d.categorie', 'c')
                   ->where('c.locataire = :locataire')
                   ->setParameter('locataire', $locataire)
                   ->orderBy('d.dateAjout', 'desc');

        return $qb->getQuery()->getArrayResult();
    }

    public function findSyndicDocumentsBySearch($syndic, $search)
    {

        $qb = $this->createQueryBuilder('d')
                   ->where('d.syndic = :syndic')
                   ->andWhere('d.titre LIKE :search')
                   ->setParameters(array('syndic' => $syndic, 'search' => '%' . $search . '%'))
                   ->orderBy('d.dateModif', 'desc');

        return $qb->getQuery()->getResult();
    }
}
