<?php

namespace AKYOS\MailboxBundle\Repository;

class MailRepository extends \Doctrine\ORM\EntityRepository
{
    public function countAllReceivedMails($user)
    {
        $qb = $this->createQueryBuilder('m')
            ->select('COUNT(m)')
            ->where('m.recipient = :user')
            ->andWhere('m.recipientState != :state')
            ->setParameters(array('user' => $user, 'state' => 'trash'))
            ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countUnreadReceivedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->select('COUNT(m)')
            ->where('m.recipient = :user')
            ->andWhere('m.read = false')
            ->andWhere('m.recipientState != :state')
            ->setParameters(array('user' => $user, 'state' => 'trash'))
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
            ->andWhere('m.recipientState != :state')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameters(array('user' => $user, 'state' => 'trash'))
        ;

        return $qb->getQuery()->getResult();
    }

    public function findUnreadReceivedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.recipient = :user')
            ->andWhere('m.read = false')
            ->andWhere('m.recipientState != :state')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameters(array('user' => $user, 'state' => 'trash'))
        ;

        return $qb->getQuery()->getResult();
    }

    public function findReceivedMailsByState($user, $state) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.recipient = :user')
            ->andWhere('m.recipientState = :state')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameters(array('user' => $user, 'state' => $state))
        ;

        return $qb->getQuery()->getResult();
    }

    public function findSentMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.sender = :user')
            ->andWhere('m.senderState != :state')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameters(array('user' => $user, 'state' => 'trash'))
        ;

        return $qb->getQuery()->getResult();
    }

    public function findDeletedMails($user) {
        $qb = $this->createQueryBuilder('m')
            ->where('m.sender = :user AND m.senderState = :state')
            ->orWhere('m.recipient = :user AND m.recipientState = :state')
            ->orderBy('m.sendingDate', 'desc')
            ->setParameters(array('user' => $user, 'state' => 'trash'))
        ;

        return $qb->getQuery()->getResult();
    }
}
