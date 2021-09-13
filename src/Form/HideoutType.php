<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Hideout;
use App\Entity\Mission;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HideoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('address')
            ->add('type')
            ->add('country', EntityType::class, [
                'class' => Country::class,
                'choice_label' => 'name'
            ])
            ->add('mission', EntityType::class, [
                'class' => Mission::class,
                'choice_label' => 'Title'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hideout::class,
        ]);
    }
}
