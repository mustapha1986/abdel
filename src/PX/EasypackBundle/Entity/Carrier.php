<?php

namespace PX\EasypackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="configuration_carrier", type="string")
 * @ORM\DiscriminatorMap({"configuration_carrier" = "PX\EasypackBundle\Entity\Carrier",
"configuration_carrier_imx" = "PX\EasypackBundle\Entity\Carrier\Imx",
"configuration_carrier_colissimo" = "PX\EasypackBundle\Entity\Carrier\Colissimo",
"configuration_carrier_chrono" = "PX\EasypackBundle\Entity\Carrier\Chrono"})
 */
class Carrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="carrier_code", type="string", length=255)
     */
    private $carrierCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Carrier
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set carrierCode
     *
     * @param string $carrierCode
     *
     * @return Carrier
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }
}
