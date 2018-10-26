<?php

namespace PX\EasypackBundle\Form;

use PX\EasypackBundle\Entity\Carrier\Chrono;
use PX\EasypackBundle\Entity\ClientHasCarrier;
use PX\EasypackBundle\Form\Carrier\ChronoType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientHasCarrierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('client', EntityType::class, array(
            'class' => 'PXEasypackBundle:Client',
            'choice_label' => 'name',
            'placeholder' => 'Clients...',
            'multiple' => false
        ))
            /*
            ->add('carrier', EntityType::class, array(
                'class' => 'PXEasypackBundle:Carrier',
                'choice_label' => 'name',
                'placeholder' => 'Transporteurs...',
                'multiple' => false
            ))


            ->add('carrier', HiddenType::class, array(
                    'data' => $options['carrier']
                )
            )
        */

            /*
            ->add('carrierT', ChronoType::class, array(
                'data_class' => Chrono::class
            ))
            */
            ->add('code', TextType::class)
            ->add('save', SubmitType::class);


    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ClientHasCarrier::class,
            'carrier' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'px_easypackbundle_clienthascarrier';
    }


}
