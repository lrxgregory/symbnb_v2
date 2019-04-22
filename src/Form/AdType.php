<?php

namespace App\Form;

use App\Entity\Ad;
use App\Form\ImageType;
use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AdType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
                TextType::class,
                $this->getConfiguration("Titre", "Titre de l'annonce"))
            ->add(
                'slug',
                TextType::class,
                $this->getConfiguration("Adresse web", "Adresse web (automatique)", [
                    'required' => false
                ]))
            ->add(
                'coverImage',
                UrlType::class,
                $this->getConfiguration("URL de l'image", "Mettez l'adresse de l'image qui met le plus en valeur votre bien"))
            ->add(
                'introduction',
                TextType::class,
                $this->getConfiguration("Introduction", "Donnez une description globale de votre bien"))
            ->add(
                'content',
                TextType::class,
                $this->getConfiguration("Description détaillée", "Donnez une description détaillée de votre bien"))
            ->add(
                'rooms',
                IntegerType::class,
                $this->getConfiguration("Nombre de chambres", "Donnez le nombre de chambres disponibles"))
            ->add(
                'price',
                MoneyType::class,
                $this->getConfiguration('Prix par nuit', 'Indiquer le prix par nuit'))
            ->add(
                'images',
                CollectionType::class,
                [   //repete le champ image
                    'entry_type' => ImageType::class,
                    //option "allow_add" permet de préciser si on a le droit d'ajouter de nouveaux élements
                    'allow_add' => true,
                    'allow_delete' => true
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ad::class,
        ]);
    }
}
