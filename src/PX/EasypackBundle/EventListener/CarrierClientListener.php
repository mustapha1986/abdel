<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 25/10/2018
 * Time: 01:01
 */

namespace PX\EasypackBundle\EventListener;


use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use PX\EasypackBundle\Entity\Carrier;
use PX\EasypackBundle\Entity\Client;
use PX\EasypackBundle\Entity\ClientHasCarrier;

class CarrierClientListener
{

    private $clientHasCarrier;
    private $client;

    public function __construct(ClientHasCarrier $clientHasCarrier , Client $client)
    {
        $this->clientHasCarrier = $clientHasCarrier;
        $this->client = $client;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

    }
}
