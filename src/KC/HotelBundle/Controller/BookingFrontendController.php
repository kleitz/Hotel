<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KC\HotelBundle\Entity\Booking;

/**
 * Booking controller.
 *
 * @Route("/booking")
 */
class BookingFrontendController extends Controller {

    /**
     * Lists all Booking entities.
     *
     * @Route("/", name="booking")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KCHotelBundle:Booking')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Booking entity.
     *
     * @Route("/{id}", name="booking_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Booking')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Booking entity.');
        }



        return array(
            'entity' => $entity,
        );
    }

    /**
     * Returns array with room availability based on room number and generates a form
     *
     * @param Room $id
     *
     * @Method({"GET", "POST"})
     * @Template()
     * @Route("/{id}/availability", name="booking_room_availability")
     */
    public function checkAvailabilityAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KCHotelBundle:Booking')->findByRoom($id);

//        if (!$entities) {
//            return $this->redirect($this->generateUrl('booking_form_availability'));
//        }

        $results = array();

        foreach ($entities as $entity) {
            $results[$entity->getId()] = array(
                'CheckIn' => $entity->getCheckInDate(),
                'CheckOut' => $entity->getCheckOutDate(),
            );
        }

        $booking = new Booking();

        //ustanawianie danych ktore sie maja wpisac automatycznie
        $booking->setBookingDate(new \DateTime());

        //tworzenie formularza
        $form = $this->createFormBuilder($booking)
                ->add('checkInDate', null, array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => array(
                        'class' => 'dp',
                    )
                ))
                ->add('checkOutDate', null, array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => array(
                        'class' => 'dp',
                    )
                ))
                ->add('save', 'submit', array('label' => 'Rezerwuj'))
                ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $dateIn = $booking->getCheckInDate();
            $dateOut = $booking->getCheckOutDate();

            $diff = date_diff($dateIn, $dateOut);
            $diffDays = $diff->days;

            $room = $em->getRepository('KCHotelBundle:Room')->find($id);
            $booking->setRoom($room);
            $price = (($room->getPrice()) * $diffDays);
            $booking->setPrice($price);
            $booking->setStatus('Booked');
            $user = $this->getUser();
            $booking->setClient($user);

//            var_dump($booking);
//            die;

            $em->persist($booking);
            $em->flush();

            return $this->redirect($this->generateUrl('booking'));
        }


        return array(
            'availability' => $results,
            'form' => $form->createView(),
        );
    }

    /**
     * Returns array with room availability based on room number
     *
     * @param Room $id
     *
     * @Method("GET")
     * @Template()
     * @Route("/availability/form", name="booking_form_availability")
     */
    public function checkBookingAction() {
        echo 'siabada';
    }

}
