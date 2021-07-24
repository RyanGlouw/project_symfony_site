<?php


namespace App\Controller\Main;

use http\Env\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $forRender = parent::renderDefault(); // рендер из базового контроллера
        return $this->render('main/index.html.twig', $forRender);
    }

}