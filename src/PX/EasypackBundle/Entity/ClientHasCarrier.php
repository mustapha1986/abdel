<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 12:06
 */

namespace PX\EasypackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Client
 *
 * @ORM\Table(name="client_has_carrier")
 * @ORM\Entity(repositoryClass="PX\EasypackBundle\Repository\ClientHasCarrierRepository")
 */
class ClientHasCarrier
{


    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var Client
     * @ORM\ManyToOne(targetEntity="PX\EasypackBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $client;


    /**
     * @var Client
     * @ORM\ManyToOne(targetEntity="PX\EasypackBundle\Entity\Carrier" , cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $carrier;


    /**
     * @var
     * @ORM\Column(name="code" , type="string" , length=255)
     */
    private $code;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set client
     *
     * @param \PX\EasypackBundle\Entity\Client $client
     *
     * @return ClientHasCarrier
     */
    public function setClient(\PX\EasypackBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \PX\EasypackBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set carrier
     *
     * @param \PX\EasypackBundle\Entity\Carrier $carrier
     *
     * @return ClientHasCarrier
     */
    public function setCarrier(\PX\EasypackBundle\Entity\Carrier $carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier
     *
     * @return \PX\EasypackBundle\Entity\Carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
}
