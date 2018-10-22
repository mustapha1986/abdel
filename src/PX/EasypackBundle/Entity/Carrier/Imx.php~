<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 12:23
 */

namespace PX\EasypackBundle\Entity\Carrier;

use PX\EasypackBundle\Entity\Carrier;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Imx
 * @package PX\EasypackBundle\Entity\Carrier
 * @ORM\Entity(repositoryClass="PX\EasypackBundle\Repository\CarrierRepository")
 */
class Imx extends Carrier
{

    /**
     * @var string
     *
     * @ORM\Column(name="imx_plage_numuro1", type="string", length=255)
     */
    private $plageNumuro1;


    /**
     * @var string
     *
     * @ORM\Column(name="imx_plage_numuro2", type="string", length=255)
     */
    private $plageNumuro2;



    /**
     * @var string
     *
     * @ORM\Column(name="imx_ftp", type="string", length=255)
     */
    private $ftp;



    /**
     * Set plageNumuro1
     *
     * @param string $plageNumuro1
     *
     * @return Imx
     */
    public function setPlageNumuro1($plageNumuro1)
    {
        $this->plageNumuro1 = $plageNumuro1;

        return $this;
    }

    /**
     * Get plageNumuro1
     *
     * @return string
     */
    public function getPlageNumuro1()
    {
        return $this->plageNumuro1;
    }

    /**
     * Set plageNumuro2
     *
     * @param string $plageNumuro2
     *
     * @return Imx
     */
    public function setPlageNumuro2($plageNumuro2)
    {
        $this->plageNumuro2 = $plageNumuro2;

        return $this;
    }

    /**
     * Get plageNumuro2
     *
     * @return string
     */
    public function getPlageNumuro2()
    {
        return $this->plageNumuro2;
    }

    /**
     * Set ftp
     *
     * @param string $ftp
     *
     * @return Imx
     */
    public function setFtp($ftp)
    {
        $this->ftp = $ftp;

        return $this;
    }

    /**
     * Get ftp
     *
     * @return string
     */
    public function getFtp()
    {
        return $this->ftp;
    }
}
