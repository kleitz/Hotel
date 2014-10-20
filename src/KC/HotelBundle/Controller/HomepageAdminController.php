<?php

namespace KC\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/admin")
 */
class HomepageAdminController extends Controller
{
    /**
     * @Route("/", name="admin_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}