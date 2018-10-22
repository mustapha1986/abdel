<?php

namespace PX\EasypackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sender
 *
 * @ORM\Table(name="sender")
 * @ORM\Entity(repositoryClass="PX\EasypackBundle\Repository\SenderRepository")
 */
class Sender
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
     * @ORM\Column(name="name2", type="string", length=255)
     */
    private $name2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_line", type="string", length=255)
     */
    private $adresseLine;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_line2", type="string", length=255)
     */
    private $adresseLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=255)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;


    /**
     * @var Client
     * @ORM\ManyToOne(targetEntity="PX\EasypackBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $client;

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
     * @return Sender
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
     * Set name2
     *
     * @param string $name2
     *
     * @return Sender
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;

        return $this;
    }

    /**
     * Get name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Set adresseLine
     *
     * @param string $adresseLine
     *
     * @return Sender
     */
    public function setAdresseLine($adresseLine)
    {
        $this->adresseLine = $adresseLine;

        return $this;
    }

    /**
     * Get adresseLine
     *
     * @return string
     */
    public function getAdresseLine()
    {
        return $this->adresseLine;
    }

    /**
     * Set adresseLine2
     *
     * @param string $adresseLine2
     *
     * @return Sender
     */
    public function setAdresseLine2($adresseLine2)
    {
        $this->adresseLine2 = $adresseLine2;

        return $this;
    }

    /**
     * Get adresseLine2
     *
     * @return string
     */
    public function getAdresseLine2()
    {
        return $this->adresseLine2;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Sender
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Sender
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Sender
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set client
     *
     * @param \PX\EasypackBundle\Entity\Client $client
     *
     * @return Sender
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
}
