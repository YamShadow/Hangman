<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/***
 * Class ContactController
 * @package AppBundle\Controller
 */
class ContactController extends Controller
{

    /**
     * Route contact
     * @Route(
     *  "/contact",
     * name="Contact",
     * )
     * @return Response
     */
    public function contact(){
        return $this->render('contact/contact.html.twig');
    }

}
