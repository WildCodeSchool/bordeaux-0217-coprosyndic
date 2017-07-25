<?php

namespace AKYOS\MailboxBundle\Services;

class TwigFilters extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('limitContent', array($this, 'limitContentLength')),
            new \Twig_SimpleFilter('limitSubject', array($this, 'limitSubjectLength')),
            new \Twig_SimpleFilter('countUp', array($this, 'formatDateToCountUp')),
        ];
    }

    public function limitContentLength($content)
    {
        $maxLength = 50;
        if (strlen($content) > $maxLength - 4) {
            $content = substr($content,0, $maxLength - 4).' ...';
        }
        return $content;
    }

    public function limitSubjectLength($subject)
    {
        $maxLength = 40;
        if (strlen($subject) > $maxLength - 4) {
            $subject = substr($subject,0, $maxLength - 4).' ...';
        }
        return $subject;
    }

    public function formatDateToCountUp($date)
    {
        $strCountUp = '';
        $interval = date_diff(new \DateTime(), $date);

        if ($interval->y > 0) {
            $strCountUp .= $interval->y > 1 ? $interval->y . " ans": $interval->y . " an";
        } elseif ($interval->m > 0) {
            $strCountUp .= $interval->m  . " mois";
        } elseif ($interval->d > 0) {
            $strCountUp .= $interval->d > 1 ? $interval->d . " jours": $interval->d . " jour";
        } elseif ($interval->h > 0) {
            $strCountUp .= $interval->h > 1 ? $interval->h . " heures" : $interval->h . " heure";
        } elseif ($interval->i > 0) {
            $strCountUp .= $interval->i > 1 ? $interval->i . " minutes" : $interval->i . " minute";
        } elseif ($interval->s > 0) {
            $strCountUp .= $interval->s > 1 ? $interval->s . " secondes" : $interval->s . " seconde";
        }

        return  $strCountUp;
    }

}
