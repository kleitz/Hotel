<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KC\HotelBundle\Entity\Booking;
use KC\HotelBundle\Form\OfferBookingType;

/**
 * Booking controller.
 *
 * @Route("/offerbooking")
 */
class OfferBookingController extends Controller
{

    /**
     * Lists all Booking entities.
     *
     * @Route("/", name="offer_booking")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $entity = new Booking();
        $form = $this->createCreateForm($entity);


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_booking_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    /**
     * Creates a new Booking entity.
     *
     * @Route("/", name="admin_booking_create")
     * @Method("POST")
     * @Template("KCHotelBundle:Booking:new.html.twig")
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

            return $this->redirect($this->generateUrl('admin_booking_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Booking entity.
     *
     * @param Booking $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Booking $entity)
    {
        $form = $this->createForm(new OfferBookingType(), $entity, array(
            'action' => $this->generateUrl('offer_booking_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Booking entity.
     *
     * @Route("/new", name="offer_booking_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Booking();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    /**
    * Creates a form to edit a Booking entity.
    *
    * @param Booking $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Booking $entity)
    {
        $form = $this->createForm(new BookingType(), $entity, array(
            'action' => $this->generateUrl('admin_booking_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
}
