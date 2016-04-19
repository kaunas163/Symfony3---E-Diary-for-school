<?php

namespace EDiaryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AttendanciesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mark', NumberType::class, [
                'label' => 'Pažymys',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('note', TextareaType::class, [
                'label' => 'Pastaba',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('attended', CheckboxType::class, [
                'label' => 'Dalyvavo',
                'required' => false
            ])
            ->add('student', EntityType::class, [
                'class' => 'EDiaryBundle:Users',
                'label' => 'Studentas',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('lesson', EntityType::class, [
                'class' => 'EDiaryBundle:Lessons',
                'label' => 'Pamoka',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDiaryBundle\Entity\Attendancies'
        ));
    }
}
