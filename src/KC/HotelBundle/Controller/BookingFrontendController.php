<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KC\HotelBundle\Entity\Booking;
use KC\HotelBundle\Form\BookingType;

/**
 * Booking controller.
 *
 * @Route("/booking")
 */
class BookingFrontendController extends Controller
{

    /**
     * Lists all Booking entities.
     *
     * @Route("/", name="booking")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
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
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Booking')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Booking entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }    
    
    
    /**
    * Returns array with room availability based on room number
    *
    * @param Room $id
    * 
    * @Method("GET")
    * @Template()  
    * @Route("/{id}/availability", name="booking_room_availability")
    */
    public function checkAvailabilityAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KCHotelBundle:Booking')->findByRoom($id);

        if(!$entities)
        {
            return 0;
        }
        
        $results = array();
        
        foreach ($entities as $entity)
        {
            $results[$entity->getId()]=array(
                'CheckIn'=>$entity->getCheckInDate(),
                'CheckOut'=>$entity->getCheckOutDate(),
            );
        }
        
        
        return array(
            'availability'  =>  $results,
        );
    }
        
    
}
