<?php

namespace App\Form;

use App\Entity\Invoice;
use App\Entity\Work;
use App\Repository\WorkRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(  'number', HiddenType::class)
            ->add(  'date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add(  'paid', HiddenType::class, [
                    'data' => false
            ])
            ->add('client')
            ->add(  'designations', CollectionType::class, [
                    // 'entry_type' => DesignationType::class,
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'entry_options' => [
                    'label' => false
                    ],
                    'by_reference' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
