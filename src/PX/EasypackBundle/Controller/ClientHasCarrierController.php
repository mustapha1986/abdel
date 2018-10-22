<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 15:14
 */

namespace PX\EasypackBundle\Controller;


use PX\EasypackBundle\Entity\ClientHasCarrier;
use PX\EasypackBundle\Form\ClientHasCarrierType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ClientHasCarrierController extends Controller
{

    public function addAction(Request $request)
    {

        //entity manager
        $em = $this->getDoctrine()->getManager();
        echo "";
        $clientHasCarrier = new ClientHasCarrier();
        $form = $this->createForm(ClientHasCarrierType::class, $clientHasCarrier);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($clientHasCarrier);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Bien enregistré');
            return $this->redirectToRoute('px_easypack_clientHasCarrier_view', ['id' => $clientHasCarrier->getId()]);
        }

        return $this->render('PXEasypackBundle:clientHasCarrier:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function viewAction()
    {
        echo "ok";die;

    }


    //remplir configurations
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

      //  dump($em->getClassMetadata('PX\EasypackBundle\Entity\Carrier'));





        if ($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $id =(int)$request->request->get('id');


            if ($id != null) {
                $result = $em->getRepository('PXEasypackBundle:Carrier')->find($id);
                $resultJson = $serializer->serialize($result, 'json');
                return new Response($resultJson);
            }
        }
        return new Response("Error ....");
    }


}