<?php

namespace App\Form;

use App\Entity\TimeTable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TimeTableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('section',
                ChoiceType::class,[
                'choices' => [
                    'Morning' => 'morning',
                    'After Noon' => 'after_noon',
                  ],
                    'attr' => array(
                        'class' => 'form-control'
                    )])
            ->add('week',ChoiceType::class,[
                'choices' => [
                    'Monday' => 'Monday',
                    'Tuesday' => 'Tuesday',
                    'Wednesday' => 'Wednesday',
                    'Thursday' => 'Thursday',
                    'Friday' => 'Friday',
                ], 'attr' => array(
                    'class' => 'form-control'
                )])
            ->add('time')
            ->add('subject')
            ->add('class')
            ->add('assignedBy')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TimeTable::class,
        ]);
    }
}
