<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KC\HotelBundle\Entity\Room;
use KC\HotelBundle\Form\RoomType;

/**
 * Room controller.
 *
 * @Route("/room")
 */
class RoomFrontendController extends Controller
{

    /**
     * Lists all Room entities.
     *
     * @Route("/", name="room")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KCHotelBundle:Room')->findAll();

        return array(
            'entities' => $entities,
        );
    }


    /**
     * Finds and displays a Room entity.
     *
     * @Route("/{id}", name="room_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Room')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Room entity.');
        }


        return array(
            'entity'      => $entity,

        );
    }
}
