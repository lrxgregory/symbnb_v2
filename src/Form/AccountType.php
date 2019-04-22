<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AccountType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, $this->getConfiguration("Prénom", "Modifiez votre prénom"))
            ->add('lastname', TextType::class, $this->getConfiguration("Nom", "Modifiez votre nom"))
            ->add('email', EmailType::class, $this->getConfiguration("Email", "Modifiez votre email"))
            ->add('picture', UrlType::class, $this->getConfiguration("Image de profil", "Modifiez votre image de profil"))
            ->add('introduction', TextType::class, $this->getConfiguration("Introduction", "Modifiez votre introduction"))
            ->add('description', TextareaType::class, $this->getConfiguration("Description", "Modifiez votre description"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
