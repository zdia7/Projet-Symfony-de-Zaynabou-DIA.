<?php

namespace App\Form;

use App\Entity\Technologie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KpiType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {

    $builder

        ->add('title')

    ;

    }


    public function configureOptions(OptionsResolver $resolver)
    {
    $resolver->setDefaults([

        'data_class' => Kpi::class,

    ]);
    }

}
