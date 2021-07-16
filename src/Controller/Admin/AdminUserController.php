<?php


namespace App\Controller\Admin;


use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;


class AdminUserController extends AdminBaseController
{
    /**
     * @Route("/admin/user", name="admin_user")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
// обращаюсь к сущности User для выгрузки пользователей
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $forRender = parent::renderDefault();
        $forRender['title'] = 'Пользователи'; // меняю заголовок на пользователей
        $forRender['users'] = $users;
        return $this->render('admin/user/index.html.twig', $forRender);
    }
}