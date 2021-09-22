<?php

class ContactController extends AppController
{
    var $helpers = array ('Html','Form');

    var $components = array ('Email','RequestHandler');

    var $name = 'Contact';

    function beforeFilter()
    {
        parent::beforeFilter();

        $this->Auth->allow(array('*'));  
    }

    function index()
    {
        if ($this->RequestHandler->isPost())
        {
            $this->Contact->set($this->data);
            if ($this->Contact->validates())
            {
                $email = new MailgunMailer();
                $email->setFrom(['you@yourdomain.com' => 'CakePHP Mailgun'])
                    ->setTo('foo@example.com')
                    ->addHeaders([
                        'X-Custom' => 'headervalue',
                        'X-MyHeader' => 'myvalue'
                    ])
                    ->setSubject('Email from CakePHP Mailgun plugin')
                    ->deliver('Message from CakePHP Mailgun plugin');
                            }
        }
    }

}

?>
