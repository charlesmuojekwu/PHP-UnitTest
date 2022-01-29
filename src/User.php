<?php

class User {

    public $first_name;

    public $surname;

    public $email;


    protected $mailer;

    /// using setmailer for dependency injection
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function getFullName() 
    {
        return trim("$this->first_name $this->surname");  /// trim was added to remove empty space for test to pass
    }

    public function notify($message)
    {

        return $this->mailer->sendMessage($this->email, $message);
    }
}