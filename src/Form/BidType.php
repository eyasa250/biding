<?php

namespace App\Form;

use App\Entity\Bid;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BidType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('bidingprice')
            ->add('user', HiddenType::class, [
                'data' => $options['user'],
            ])
            ->add('article', HiddenType::class, [
                'data' => $options['article'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bid::class,
            'user' => null,
            'article' => null,
        ]);
    }
}
