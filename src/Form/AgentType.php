<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Country;
use App\Entity\Mission;
use App\Entity\Specialty;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgentType extends AbstractType
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
            ->add('specialty', EntityType::class, [
                'class' => Specialty::class,
                'choice_label' => 'type',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('current_mission', EntityType::class, [
                'class' => Mission::class,
                'choice_label' => 'Title'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
            'invalid_message' => 'Erreur dans le formulaire',
        ]);
    }
}
