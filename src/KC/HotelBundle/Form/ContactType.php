<?php

namespace KC\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\Request;

public function contactAction(Request $request)
{
    $defaultData = array('message' => 'Podaj swoje dane:');
    $form = $this->createFormBuilder($defaultData)
        ->add('sendSubject', 'text')
        ->add('sendFrom', 'email')
        ->add('sendBody', 'textarea')
        ->add('send', 'submit')
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        // data is an array with "name", "email", and "message" keys
        $data = $form->getData();
    }

    // ... render the form
    $message = \Swift_Message::newInstance()
            ->setSubject( $data[0] )
            ->setFrom( $data[1] )
            ->setTo('KonradConer@gmail.com') 
            ->setBody( $data[2] )
        ;
        $this->get('mailer')->send($message);
        
        return new Response('contact');
}
