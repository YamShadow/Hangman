<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/***
 * Class SecurityController
 * @package AppBundle\Controller
 */
class SecurityController extends Controller
{

    /**
     * Route register
     * @Route(
     *  "/register",
     *  name="Register",
     * )
     * @return Response|void
     */
    public function register(){
        return $this->render('security/register.html.twig');

    }

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
