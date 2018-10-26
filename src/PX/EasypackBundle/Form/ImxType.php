<?php

namespace PX\EasypackBundle\Form;


use PX\EasypackBundle\Entity\Carrier\Imx;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('carrier_code')
            ->add('plageNumuro1')
            ->add('plageNumuro2')
            ->add('ftp')
       /*     ->add('client', HiddenType::class )
            ->add('transporteur', HiddenType::class, [
                'data' => 'imx'
            ])*/
          //  ->add('save', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Imx::class,
        ]);
    }
}
