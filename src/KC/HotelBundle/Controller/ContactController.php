<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Contact controller.
 *
 * @Route("/contact")
 */
class ContactController extends Controller
{

    /**
     * @Route("/", name="contact")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('contact_send'))
            ->setMethod('POST')
            ->add('subject', 'text')
            ->add('from', 'text')
            ->add('body', 'textarea')
            ->add('send', 'submit')
            ->getForm();


        return array(
            'form'   => $form->createView(),
        );
    }


    /**
     * @Route("/send", name="contact_send")
     * @Method("POST")
     * @Template()
     */
    public function sendAction(Request $request)
    {

        //Wysłanie wiadomości do nas od klienta
        $form = $request->request->get('form');

        $message = \Swift_Message::newInstance()
            ->setSubject( $form['subject'])
            ->setFrom( $form['from'])
            ->setTo('KonradConer@gmail.com') 
            ->setBody( $form['body']);

        //Wysłanie wiadomości do klienta od nas z potwierdzeniem
        $this->get('mailer')->send($message);
        
        $message1 = \Swift_Message::newInstance()
            ->setSubject( 'Potwierdzenie zapytania' )
            ->setFrom( 'KonradConer@gmail.com')
            ->setTo($form['from']) 
            ->setBody(' Dziękujemy za zainteresowanie. Otrzymaliśmy twojego maila. Odpowiemy najszybciej jak to możliwe. ');

        $this->get('mailer')->send($message1);

        $this->get('session')->getFlashBag()->add(
            'notice',
            'Wysłałeś se cośtam!'
        );

        return new RedirectResponse($this->generateUrl('contact'));
    }
}
