<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 13:31
 */

namespace PX\EasypackBundle\Controller;


use PX\EasypackBundle\Entity\Client;
use PX\EasypackBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ClientController extends Controller
{


    public function addAction(Request $request)
    {

        //entity manager
        $em = $this->getDoctrine()->getManager();
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($client);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Client bien enregistré');
            return $this->redirectToRoute('px_easypack_client_view' , ['id' => $client->getId()]);
        }

        return $this->render('PXEasypackBundle:client:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function listAction(){
        echo "list";die;
    }


    public function viewAction($id , Request $request){
        //entity manager
        $em = $this->getDoctrine()->getManager();
        $client  = $em->getRepository('PXEasypackBundle:Client')->find($id);

        if($client === null){
            throw new NotFoundHttpException('client non trouvé');
        }
        return $this->render('PXEasypackBundle:client:view.html.twig', array(
            'client' => $client,
        ));
    }


}