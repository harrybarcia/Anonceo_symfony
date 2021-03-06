<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre', TextType::class,[
            "required"=>false,
            "label"=>"Nom de la catégorie",
            "attr"=>["placeholder"=>"saisir le titre de la catégorie"
            ]
        ])
        ->add('motscles', TextType::class,[
            "required"=>false,
            "label"=>"Mots Clefs",
            "attr"=>["placeholder"=>"saisir le nom de la catégorie"
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
