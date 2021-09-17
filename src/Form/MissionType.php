<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Mission;
use App\Entity\Specialty;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('codename')
            ->add('type')
            ->add('status',ChoiceType::class ,[
                'choices' => [
                    'In progress' => 'In_progress',
                    'Success' => 'success',
                    'Failure' => 'failure',
                ],
                'placeholder' => 'Select a status'
            ])
            ->add('begin_date', DateType::class, [
                'widget' => 'single_text'
            ]);
//            if () {
                $builder->add('end_date', DateType::class, [
                'widget' => 'single_text',
                'empty_data' => null
            ]);
//            }
            $builder->add('required_specialty', EntityType::class, [
                'class' => Specialty::class,
                'choice_label' => 'Type',
                'placeholder' => 'Select a specialty'
            ])
            ->add('country', EntityType::class, [
                'class' => Country::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a country'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mission::class,
        ]);
    }
}
