<?php

namespace PX\EasypackBundle\Form\Carrier;

use PX\EasypackBundle\Entity\Carrier\Chrono;
use PX\EasypackBundle\Form\CarrierType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChronoType extends CarrierType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);
        $builder->add('plageNumuro3')->add('ref');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Chrono::class
        ));
    }




    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'px_easypackbundle_carrier_chrono';
    }


}
