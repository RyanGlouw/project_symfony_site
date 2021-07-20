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
        $forRender = parent::renderDefault();
        $forRender['arr'] = [1,2];
        return $this->render('main/index.html.twig', $forRender);
    }

}