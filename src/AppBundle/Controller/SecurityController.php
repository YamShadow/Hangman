<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route(
 *     "/{_locale}"
 * )
 */
class SecurityController extends Controller
{

    /**
     * Route login
     * @Route(
     *  "/login",
     * name="Login",
     * )
     * @return Response
     */
    public function login(){
        return $this->render('security/login.html.twig');

    }

}
