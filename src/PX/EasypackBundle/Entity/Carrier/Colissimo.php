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
class Colissimo extends Carrier
{

    /**
     * @var string
     *
     * @ORM\Column(name="colissimo_plage_numuro1", type="string", length=255)
     */
    private $plageNumuro1;




    /**
     * @var string
     *
     * @ORM\Column(name="colissimo_status", type="string", length=255)
     */
    private $status;



    /**
     * Set plageNumuro1
     *
     * @param string $plageNumuro1
     *
     * @return Colissimo
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
     * Set status
     *
     * @param string $status
     *
     * @return Colissimo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
