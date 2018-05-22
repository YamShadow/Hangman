<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Register;
use AppBundle\Form\Type\RegisterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route(
 *     "/{_locale}"
 * )
 */
class RegisterController extends Controller
{

    /**
     * Route register
     * @Route(
     *  "/register",
     * name="Register",
     * )
     * @return Response
     */
    public function registerAction(Request $request){

        //$register = new Register();

        $form =  $this
            ->createForm(RegisterType::class)
            ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->addFlash('success', 'Demande de contact reçu');

        }
        return $this->render('register/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

}