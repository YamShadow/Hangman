<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\Type\RegisterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder){

        $user = new User();

        $form =  $this
            ->createForm(RegisterType::class, $user)
            ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $this->addFlash('success', 'user.register.success');

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('register/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

}