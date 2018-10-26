<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 25/10/2018
 * Time: 16:24
 */

namespace PX\EasypackBundle\Form;


use PX\EasypackBundle\Form\Carrier\ChronoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Craue\FormFlowBundle\Form\FormFlowInterface;
class CreateVehicleStep2Form extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $org= $options['currentOrg'];

        switch ($org) {
            case 1:
                $builder->add('carrier', ImxType::class, array(
                    'attr' => array(
                        'placeholder' => 'monPlaceholder'
                    )));
                break;
            case 2:

                $builder->add('carrier', ChronoType::class, array(
                    'attr' => array(
                        'placeholder' => 'monPlaceholder'
                    )));
                break;
        }

    }


    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'currentOrg' => null,
            'allow_extra_fields' => true,
        ));
    }



    public function getBlockPrefix()
    {
        return 'createVehicleStep2';
    }

}