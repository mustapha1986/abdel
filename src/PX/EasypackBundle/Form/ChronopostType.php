<?php

namespace PX\EasypackBundle\Form;


use PX\EasypackBundle\Entity\Carrier\Chrono;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChronopostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('carrier_code')
            ->add('plageNumuro3')
            ->add('ref');
            /*    ->add('client', HiddenType::class )
                ->add('transporteur', HiddenType::class, [
                    'data' => 'chrono'
                ])*/
         //   ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chrono::class
        ]);


    }
}
