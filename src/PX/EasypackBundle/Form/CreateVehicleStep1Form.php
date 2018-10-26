<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 25/10/2018
 * Time: 16:23
 */

namespace PX\EasypackBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateVehicleStep1Form extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {



        $org= $options['currentOrg'];
        $builder->add('client', EntityType::class, array(
            'class' => 'PXEasypackBundle:Client',
            'choice_label' => 'name',
            'placeholder' => 'Clients...',
            'multiple' => false
        ))
            ->add('code', TextType::class);


        $validValues = array(1, 2);
        $builder->add('Transporteur', ChoiceType::class, array(
            'choices' => array_combine($validValues, $validValues),
            'mapped' => false,
            'attr' => array(
                'placeholder' => 'Transporteur'
            )));


    }


    public function configureOptions(OptionsResolver $resolver)
    {


        $resolver->setDefaults(array(
            'currentOrg' => null,
        ));
    }




    public function getBlockPrefix()
    {
        return 'createVehicleStep1';
    }
}