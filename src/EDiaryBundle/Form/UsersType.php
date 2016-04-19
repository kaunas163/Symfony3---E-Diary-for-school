<?php

namespace EDiaryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Vartotojo vardas',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'El. pašto adresas',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
//            ->add('password', PasswordType::class, [
//                'label' => 'Slaptažodis',
//                'attr' => [
//                    'class' => 'form-control'
//                ]
//            ])
             ->add('child', EntityType::class, [
                 'class' => 'EDiaryBundle:Users',
                 'label' => 'Vaikas',
                 'choice_label' => 'username',
                 'attr' => [
                     'class' => 'form-control'
                 ]
             ])
//            ->add('role', ChoiceType::class, [
//                'choices' => [
//                    'Administratorius' => 'ROLE_ADMIN',
//                    'Mokytojas' => 'ROLE_TEACHER',
//                    'Mokinys, mokinio tėvai' => 'ROLE_USER'
//                ],
//                'label' => 'Rolė',
//                'attr' => [
//                    'class' => 'form-control'
//                ]
//            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDiaryBundle\Entity\Users'
        ));
    }
}
