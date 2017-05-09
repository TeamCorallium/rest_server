<?php

namespace CoralliumServerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\EmailType;
use \Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class )
            ->add('username', null)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,

                'first_options' => array('label' => 'password'),
                'second_options' => array('label' => 'password_confirmation'),

            ))
        ->add('projects')->add('profile');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoralliumServerBundle\Entity\User',
            'csrf_protection'   => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'coralliumserverbundle_user';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user';
    }
}
