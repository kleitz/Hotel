<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KC\HotelBundle\Entity\Offer;
use KC\HotelBundle\Entity\Booking;
use KC\HotelBundle\Form\OfferType;

/**
 * Offer controller.
 *
 * @Route("/offer")
 */
class OfferFrontendController extends Controller
{

    /**
     * Lists all Offer entities.
     *
     * @Route("/", name="offer")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KCHotelBundle:Offer')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    
    /**
     * Creates a new Booking entity.
     *
     * @Route("/", name="offer_booking_create")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $entity = new Booking();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offer_booking', array('id' => $entity->getId())));
        }
    }
    
    /**
     * Finds and displays a Offer entity.
     *
     * @Route("/{id}", name="offer_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Offer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offer entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
    
    

}
