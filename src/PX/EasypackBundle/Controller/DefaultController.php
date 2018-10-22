<?php

namespace PX\EasypackBundle\Controller;

use PX\EasypackBundle\Entity\Carrier\Chrono;
use PX\EasypackBundle\Entity\Carrier\Imx;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();


        $carr = new Imx();
        $carr->setName('imx');
        $carr->setCarrierCode('IMX');
        $carr->setFtp('ftp');
        $carr->setPlageNumuro1('00:22:39:012');
        $carr->setPlageNumuro2('00:22:39:012');
        $em->persist($chrono);
        $em->flush();



        $chrono = new Chrono();
        $chrono->setName('Chrono');
        $chrono->setPlageNumuro3('PL:09:28');
        $chrono->setRef('REFcHRONO');
        $chrono->setCarrierCode('ch');
        $em->persist($chrono);
        $em->flush();


        return $this->render('PXEasypackBundle:Default:index.html.twig');
    }



}
