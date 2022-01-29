<?php

/**
 * User
 *
 * An example user class
 */
class UserStatic
{

    /**
     * Email address
     * @var string
     */
    public $email;

    /**
     * Mailer object
     * @var MailerTest
     */
    protected $mailer_callable;

    /**
     * Constructor
     *
     * @param string $email The user's email
     *
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Mailer setter
     *
     * @param Mailer $mailer A Mailer object
     *
     * @return void
     */
    public function setMailerCallable(callable $mailer_callable) {
        $this->mailer_callable = $mailer_callable;        
    }
    
    /**
     * Send the user a message
     *
     * @param string $message The message
     *
     * @return boolean
     */
    /// using php callable function
    public function notify(string $message)
    {
        return call_user_func($this->mailer_callable, $this->email, $message);
        //return $this->mailer::send($this->email, $message);
    }
}
