<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 25/10/2018
 * Time: 16:19
 */

namespace PX\EasypackBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;

class CreateVehicleFlow extends FormFlow
{



    protected function loadStepsConfig()
    {



        return array(
            array(
                'label' => 'Client',
                'form_type' => CreateVehicleStep1Form::class,
                'form_options' => array(
                    'validation_groups' => array('Default'),
                ),
            ),
            array(
                'label' => 'Transporteur',
                'form_type' => CreateVehicleStep2Form::class,
                'form_options' => array(
                    'validation_groups' => array('Default'),
                ),

                /*
                ,
                    'skip' => function ($estimatedCurrentStepNumber, FormFlowInterface $flow) {
                        return $estimatedCurrentStepNumber > 1;
                    },
                */
            ),
            array(
                'label' => 'Confirmation',
            ),
        );

    }



    public function getFormOptions($step, array $options = array())
    {
        $options = parent::getFormOptions($step, $options);

        if ($step === 2) {


            $options['currentOrg'] = 2;

        }

        return $options;
    }


}