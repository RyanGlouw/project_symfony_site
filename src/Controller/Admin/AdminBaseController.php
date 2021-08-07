<?php
// базовый контроллер страницы админа

namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBaseController extends AbstractController
{
    public function renderDefault() // рендер страницы админа
    {
        return [
            'title' => 'Админ панель'
        ];
    }
}