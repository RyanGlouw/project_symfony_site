<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
//    Делаю выпадающий список

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image', FileType::class, array(
                'label' => 'Главное изображение',
                'required' => false, // отключение проверки браузера на заполнение поля
                'mapped' => false,// отвязываю данное поле от Entity
            ))
            ->add('category', EntityType::class, array(
                'label' => 'Категории',
                'class' => Category::class,
                'choice_label' => 'title',
            ))
            ->add('title', TextType::class, array(
                'label' => 'Заголовок категории',
                'attr' => [ // attr позволяет добавить теги html в массив
                    'placeholder' => 'Введите текст'
                ]
            ))
            ->add('content', TextareaType::class, array(
                'label' => 'Описание категории',
                'attr' => [ // attr позволяет добавить теги html в массив
                    'placeholder' => 'Введите описание'
                ]
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Сохранить',
                'attr' => [
                    'class' => 'btn btn-success float-left mt-3'
                ]
            ))
            ->add('delete', SubmitType::class, array(
                'label' => 'Удалить',
                'attr' => [
                    'class' => 'btn btn-danger mt-2'
                ]
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
