<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/***
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/hello/{name}",
     *  name="lol",
     *  defaults={"name" = "Mathieu "}
     * )
     */
    public function helloAction(Request $request, String $name){
        //return new Response('<body>Hello</body>');
        return $this->render('default/hello.html.twig', [
            'name' => $name
        ]);
    }
}
