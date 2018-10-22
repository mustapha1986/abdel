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
class Chrono extends Carrier
{

    /**
     * @var string
     *
     * @ORM\Column(name="chrono_plage_numuro3", type="string", length=255)
     */
    private $plageNumuro3;

    


    /**
     * @var string
     *
     * @ORM\Column(name="chrono_ref", type="string", length=255)
     */
    private $ref;



    /**
     * Set plageNumuro3
     *
     * @param string $plageNumuro3
     *
     * @return Chrono
     */
    public function setPlageNumuro3($plageNumuro3)
    {
        $this->plageNumuro3 = $plageNumuro3;

        return $this;
    }

    /**
     * Get plageNumuro3
     *
     * @return string
     */
    public function getPlageNumuro3()
    {
        return $this->plageNumuro3;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Chrono
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }
}
