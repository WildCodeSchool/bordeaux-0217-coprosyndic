<?php

namespace AKYOS\MailboxBundle\Repository;

class MailRepository extends \Doctrine\ORM\EntityRepository
{
    public function countAllReceivedMails($user)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('COUNT(m)')
            ->where('m.recipient = :user')
            ->andWhere('m.deleted = false')
            ->setParameter('user', $user)
            ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countUnreadReceivedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->select('COUNT(m)')
            ->where('m.recipient = :user')
            ->andWhere('m.read = false')
            ->andWhere('m.deleted = false')
            ->setParameter('user', $user)
        ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countSentMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->select('COUNT(m)')
            ->where('m.sender = :user')
            ->setParameter('user', $user)
        ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function findAllReceivedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.recipient = :user')
            ->andWhere('m.deleted = false')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameter('user', $user)
        ;

        return $qb->getQuery()->getResult();
    }

    public function findUnreadReceivedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.recipient = :user')
            ->andWhere('m.read = false')
            ->andWhere('m.deleted = false')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameter('user', $user)
        ;

        return $qb->getQuery()->getResult();
    }

    public function findSentMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.sender = :user')
            ->andWhere('m.deleted = false')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameter('user', $user)
        ;

        return $qb->getQuery()->getResult();
    }

    public function findDeletedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.sender = :user OR m.recipient = :user')
            ->andWhere('m.deleted = true')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameter('user', $user)
        ;

        return $qb->getQuery()->getResult();
    }
}
