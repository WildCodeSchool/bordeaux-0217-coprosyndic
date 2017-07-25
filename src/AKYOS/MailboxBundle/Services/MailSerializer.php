<?php

namespace AKYOS\MailboxBundle\Services;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class MailSerializer
{
    private $encoder;
    private $normalizer;
    private $serializer;

    public function __construct()
    {
        $this->encoder = new JsonEncoder();
        $this->normalizer = new ObjectNormalizer();
        $this->serializer = new Serializer(array($this->normalizer), array($this->encoder));
    }

    public function serialize($mails)
    {
        return $this->serializer->serialize($mails, 'json');
    }
}