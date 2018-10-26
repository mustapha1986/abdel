<?php

namespace PX\EasypackBundle\Controller;


use PX\EasypackBundle\Entity\Carrier\Imx;
use PX\EasypackBundle\Entity\ClientHasCarrier;
use PX\EasypackBundle\Form\ChronopostType;
use PX\EasypackBundle\Form\ClientHasCarrierType;
use PX\EasypackBundle\Form\CreateVehicleFlow;
use PX\EasypackBundle\Form\CreateVehicleStep1Form;
use PX\EasypackBundle\Form\CreateVehicleStep2Form;
use PX\EasypackBundle\Form\ImxType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class TestController extends AbstractController
{
    /**
     * @Route("/config", name="config")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('PXEasypackBundle:Carrier')->find(25);

        $Imx = new Imx();
        $Imx->setName('imxx');
        $Imx->setCarrierCode('IMXX');
        $Imx->setFtp('fteep');
        $Imx->setPlageNumuro1('00:22:39:01222222222222');
        $Imx->setPlageNumuro2('00:22:39:01222222222222');

        $conf = new ClientHasCarrier();
        $conf->setCode('imx');
        $conf->setCarrier($Imx);
        $conf->setClient($client);

        $em->persist($Imx);
        $em->persist($client);
        $em->persist($conf);
        $em->flush();

        die;

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }


    /**
     * @Route("/listeClient", name="listeClient")
     */
    public function listClientAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('PXEasypackBundle:Client')->findAll();

        return $this->render('PXEasypackBundle:clientHasCarrier:listeClient.html.twig', ['clients' => $clients]);
    }


    public function addConfAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        /* $client = $em->getRepository(\App\Entity\Client::class)->find(25);*/

        $conf = new ClientHasCarrier();
        $formPrincipale = $this->createForm(ClientHasCarrierType::class, $conf, ['carrier' => null]);
        $types = [
            'Imx' => ImxType::class,
            'chrono' => ChronopostType::class,
        ];

        // create the forms based on the types indicated in the types arary
        $forms = [];
        foreach ($types as $type) {
            $forms[] = $this->createForm($type);
        }

        if ($request->isMethod('POST')) {

            foreach ($forms as $form) {
                $form->handleRequest($request);


                if (!$form->isSubmitted()) continue; // no need to validate a form that isn't submitted

                if ($form->isValid()) {
                    $data = $form->getData();


                    dump($data);
                    die;

                    /* $conf->setClient($client);*/


                    $em->persist($data);


                    $em->persist($conf);


                    $em->flush();

                    break; // stop processing as we found the form we have to deal with
                }
            }
        }


        $views = [];
        foreach ($forms as $form) {
            $views[] = $form->createView();
        }


        return $this->render('PXEasypackBundle:clientHasCarrier:add.html.twig',
            ['forms' => $views, 'types' => $types, 'formPrincipale' => $formPrincipale->createView()]);


        /*    //entity manager
            $em = $this->getDoctrine()->getManager();
            echo "";

            $clientHasCarrier = new ClientHasCarrier();

            $form = $this->createForm(ClientHasCarrierType::class, $clientHasCarrier);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($clientHasCarrier);
                $em->flush();
            }

            return $this->render('clientHasCarrier/add.html.twig', array(
                'form' => $form->createView(),
            ));*/
    }


    /**
     * @Route("/listeConfig", name="configuration_by_carrier")
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $id = (int)$request->request->get('id');

        if ($id != null) {
            $result = $em->getRepository('PXEasypackBundle:Carrier')->find($id);

            $resultJson = $serializer->serialize($result, 'json');

            return new Response(
                $resultJson
            );
        }

    }


    // in src/MyCompany/MyBundle/Controller/VehicleController.php
    public function createVehicleAction()
    {


        $formData = new ClientHasCarrier(); // Your form data class. Has to be an object, won't work properly with an array.

        $flow = $this->get('px_easypack.form.flow.createVehicle'); // must match the flow's service id



        $flow->bind($formData);

        // form of the current step
        $form = $flow->createForm();
        if ($flow->isValid($form)) {
            $flow->saveCurrentStepData($form);

            if ($flow->nextStep()) {
                // form for the next step
                $form = $flow->createForm();
            } else {
                // flow finished
                $em = $this->getDoctrine()->getManager();
                $em->persist($formData);
                $em->flush();

                $flow->reset(); // remove step data from the session

                return $this->redirect($this->generateUrl('home')); // redirect when done
            }
        }

        return $this->render('PXEasypackBundle:vehicule:createVehicle.html.twig', array(
            'form' => $form->createView(),
            'flow' => $flow,
        ));
    }


}
