<?php

namespace AppBundle\Controller;

use AppBundle\Services\Dictionnary;
use AppBundle\Services\Game;
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
        //

        $game = $this->get('session')->get('game');
        //$game = null;
        if($game === null) {

            $word = $dictionnary->getRandom();
            $game = new Game($word);

            $this->get('session')->set('game', $game);

        }

        dump($game);

        return $this->render('game/game.html.twig', [
            'game' => $game,
        ]);
    }

    /**
    * Route game
    * @Route(
    *     "/game/letter/{letter}",
    *     name="tryLetter",
     *     requirements={"letter"="[A-Z]"}
    * )
    * @return Response
    */
    public function tryLetter(Request $request, String $letter) {

        $game = $this->get('session')->get('game');

        if($game) {
            $game->tryLetter($letter);
        }

        return $this->redirectToRoute('Game');
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

    /**
     * Route game
     * @Route(
     *     "/reset",
     *     name="resetGame",
     * )
     * @return Response
     */
    public function resetAction() {
        $this->get('session')->remove('game');

        return $this->redirectToRoute('Game');
    }




}
