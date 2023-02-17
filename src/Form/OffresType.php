<?php

namespace App\Form;

use App\Entity\Offres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class OffresType extends AbstractType
{ 
    protected static $type = array('Subject A', 'Subject B', 'Subject C');
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add ('type', ChoiceType::class,array(
                'choices'=> array(
                     'Personne'=> 'Personne',
                   'Couple'=>'Couple' ,
                 'Enfant'=>'Enfant',))
            )
            
            
            ->add('prix' ,NumberType::class, [
                'label' => 'prix ',
                'html5' => true,
                'attr' => [
                    'rows' => 5,
                    'min' => 100,
                    'max' =>800,
               
              
                    'placeholder' => 'entrer le prix '
                ],
                    ])

            
                
                  
            ->add('duree',NumberType::class, [
                'label' => 'duree ',
                'html5' => true,
                
                
                'attr' => [
                    'rows' => 5,
                    'min' => 1,
                    'max' =>8,
                    'placeholder' => 'duree entre 1 et 8 Mois'
                ],
                    ])
            ->add('description',TextType::class,[
                'constraints'=>[
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s]*$/',
                        'message' => 'Le champ nom ne peut pas contenir de chiffres.'
                        ]),
                ]
                    ])
          
                
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offres::class,
        ]);
    }
 
}