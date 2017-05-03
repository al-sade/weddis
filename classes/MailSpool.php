<?php
class MailSpool
{
  public static $mails = [];

  public static function addMail($subject, $to, $message)
  {
    self::$mails[] = [ 'subject' => $subject, 'to' => $to, 'message' => $message ];
  }

  public static function send() 
  {
    foreach(self::$mails as $mail) {
      mail($mail['to'], $mail['subject'], $mail['message']);
    }
  }
}

//In your script you can call anywhere
//MailSpool::addMail('Hello', 'contact@example.com', 'Hello from the spool');
//
//
//register_shutdown_function('MailSpool::send');
//
//exit(); // You need to call this to send the response immediately