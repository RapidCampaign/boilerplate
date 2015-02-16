<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends FOSRestController
{
    /**
     * @Route("/test", name="homepage")
     */
    public function indexAction()
    {
        $data = array(
            array(
                'msg' => 'Hello world!'
            )
        );
        return $this->handleView($this->view($data)->setFormat('json'));
    }
}
