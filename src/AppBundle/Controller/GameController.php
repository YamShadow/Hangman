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
    public function game(Request $request){
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
