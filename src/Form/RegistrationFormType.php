<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // TODO MARIUS : validation du formulaire + Ajout des placeholders & labels en FR + Gérer les méssages d'erreur en FR.
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
            ])
            ->add("lastName", TextType::class, [
                'label' => 'Nom'
            ])
            ->add("phoneNumber", TextType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'placeholder' => '01 02 03 04 05'
                ]
            ])
            ->add("shippingAddress", TextType::class, [
                'label' => 'Adresse de livraison',
                'required' => true,
                'attr' => [
                    'placeholder' => '10 rue denfert-rocherau, 80000, Amiens'
                ]
            ])
            ->add("billingAddress", TextType::class, [
                'label' => 'Adresse de facturation'
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'placeholder' => 'jean.dupont@e-mail.com'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => "En appuyant sur ''valider'' vous acceptez les conditions d'utilisation",
                'constraints' => [
                    new IsTrue([
                        'message' => "Veuillez accepter les conditions d'utilisation",
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'invalid_message' => 'Les mots de passe ne sont pas identiques',
                'first_options' => ['label' => 'Votre mot de passe'],
                'second_options' => ['label' => 'Confirmez votre mot de passe'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
