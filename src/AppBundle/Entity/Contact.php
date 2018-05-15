<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{

    /**
     * @Assert\NotBlank
     */
    private $subject;

    /**
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;

    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 10,
     *      max = 50,
     * )

     */
    private $message;

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

}

