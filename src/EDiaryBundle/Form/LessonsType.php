<?php

namespace EDiaryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LessonsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datetime', DateTimeType::class, [
                'label' => 'Data ir laikas',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('comment', TextareaType::class, array(
                'label' => 'Komentaras',
                'attr' => array('class' => 'form-control'))
            )
            ->add('course', EntityType::class, array(
                'class' => 'EDiaryBundle:Courses',
                'label' => 'Kursas',
                'attr' => array('class' => 'form-control'))
            )
            ->add('teacher', EntityType::class, array(
                'class' => 'EDiaryBundle:Users',
                'label' => 'Mokytojas',
                'attr' => array('class' => 'form-control'))
            )
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDiaryBundle\Entity\Lessons'
        ));
    }
}
