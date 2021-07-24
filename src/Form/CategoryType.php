<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Sodium\add;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image', FileType::class, array(
                'label' => 'Главное изображение',
                'required' => false, // отключение проверки браузера на заполнение поля
                'mapped' => false,// отвязываю данное поле от Entity
            ))
            ->add('title', TextType::class, array(
                'label' => 'Заголовок категории',
                'attr' => [ // attr позволяет добавить теги html в массив
                    'placeholder' => 'Введите текст'
                ]
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Описание категории',
                'attr' => [ // attr позволяет добавить теги html в массив
                    'placeholder' => 'Введите описание'
                ]
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Сохранить'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
