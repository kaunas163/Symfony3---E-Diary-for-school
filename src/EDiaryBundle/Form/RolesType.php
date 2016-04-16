<?php

namespace EDiaryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RolesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Pavadinimas',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Aprašymas',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('pages', TextType::class, [
                'label' => 'Puslapiai',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('courses', TextType::class, [
                'label' => 'Kursai',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('lessons', TextType::class, [
                'label' => 'Pamokos',
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
            'data_class' => 'EDiaryBundle\Entity\Roles'
        ));
    }
}
