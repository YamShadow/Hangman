<?php

namespace AppBundle\Controller;

use AppBundle\Services\Dictionnary;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route(
 *     "/{_locale}"
 * )
 * Class GameController
 * @package AppBundle\Controller
 */

class GameController extends Controller
{

    /**
     * Route game
     * @Route(
     *     "/game",
     *     name="Game",
     * )
     * @return Response
     */
    public function indexAction(Dictionnary $dictionnary)
    {

        //1. Créer le service dictionnary
        //2. Récupérer le service dans cette méthode
        //3. Définir un tableau de mots dans le service (constante ? ... )
        //4. La méthode getRandom() du service doit renvoyer le mot aléatoire

        $word = $dictionnary->getRandom();
        dump($word);
        return $this->render('game/game.html.twig');
    }

    /**
     * Route game
     * @Route(
     *     "/won",
     *     name="Won",
     * )
     * @return Response
     */
    public function won(Request $request){
        return $this->render('game/won.html.twig');
    }

    /**
     * Route game
     * @Route(
     *     "/failed",
     *     name="Failed",
     * )
     * @return Response
     */
    public function failed(Request $request){
        return $this->render('game/failed.html.twig');
    }




}
