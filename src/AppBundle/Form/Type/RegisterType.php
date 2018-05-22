<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;


class RegisterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['label' => 'registerForm.emailLabel'])
            ->add('password', RepeatedType::class, array(
                'label' => 'registerForm.confirmPasswordLabel',
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'registerForm.passwordLabel'),
                'second_options' => array('label' => 'registerForm.confirmPasswordLabel'),
        ))
            ->add('send', SubmitType::class, ['label' => 'registerForm.sendLabel']);
    }
}