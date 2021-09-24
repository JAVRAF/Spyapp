<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Mission;
use App\Entity\Target;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TargetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('dob', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('id_code')
            ->add('nationality', EntityType::class, [
                'class' => Country::class,
                'choice_label' => 'nationality'
            ])
            ->add('mission', EntityType::class, [
                'class' => Mission::class,
                'choice_label' => 'Title',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Target::class,
        ]);
    }
}
