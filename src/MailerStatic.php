<?php

/**
 * Mailer
 *
 * Send messages
 */
class MailerStatic
{
    /**
     * Send a message
     *
     * @param string $email The email address
     * @param string $message The message
     *
     * @return boolean True if sent, false otherwise
     */
    public static function send($email, $message)
    {
        if(empty($email))
        {
            throw new InvalidArgumentException;
        }

        echo "send '$message' to '$email'";

        return true;
    }
}