<?php
// базовый контроллер страницы

namespace App\Controller\Main;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function renderDefault() // рендер на главную страницу
    {
        return [
            'title' => 'Сайт mysite '
        ];
    }

}