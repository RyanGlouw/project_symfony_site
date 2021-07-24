<?php


namespace App\Controller\Admin;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AdminBaseController
{
    /**
     * @Route("/admin", name="admin_home")
     * @return Response
     */
    public function index()
    {
        $forRender = parent::renderDefault(); // рендер из базового контроллера
        return $this->render('admin/index.html.twig', $forRender);
    }
}