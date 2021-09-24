<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Asset;
use App\Entity\Country;
use App\Entity\Hideout;
use App\Entity\Mission;
use App\Entity\Specialty;
use App\Entity\Target;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description', TextareaType::class)
            ->add('codename')
            ->add('type')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Planification' => 'Planification',
                    'In progress' => 'In_progress',
                    'Success' => 'Success',
                    'Failure' => 'Failure',
                ],
                'placeholder' => 'Select a status'
            ])
            ->add('begin_date', DateType::class, [
                'widget' => 'choice',
                'required' => false,
            ])
            ->add('end_date', DateType::class, [
                'widget' => 'choice',
                'required' => false,
            ])
            ->add('required_specialty', EntityType::class, [
                'class' => Specialty::class,
                'choice_label' => 'Type',
                'placeholder' => 'Select a specialty'
            ])
            ->add('country', EntityType::class, [
                'class' => Country::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a country'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mission::class,
        ]);
    }
}
