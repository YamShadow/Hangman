<?php

namespace AppBundle\Services;

use AppBundle\Entity\Contact;

class MyMailer
{

    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMessageFromContact(Contact $contact)
    {

        $message = (new \Swift_Message($contact->getSubject()))
            ->setFrom('send@example.com')
            ->setTo($contact->getEmail())
            ->setBody($contact->getMessage())
        ;

        $this->mailer->send($message);



    }
}