<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Contact;
use AppBundle\Form\Type\ContactType;

/**
 * @Route(
 *     "/{_locale}"
 * )
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
    public function contactAction(Request $request){

        $contact = new Contact();
        dump($contact);

        $form =  $this
                    ->createForm(ContactType::class, $contact)
                    ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            dump($form->getData());
        }
        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
