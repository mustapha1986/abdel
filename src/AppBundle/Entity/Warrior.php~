<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 09:41
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Character
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharacterRepository")
 * */
class Warrior extends Pcharacter {


    /**
     * @var armor
     * @ORM\Column(name="armor", type="string", length=25)
     *
     */
    protected $armor;




    /**
     * Set armor
     *
     * @param string $armor
     *
     * @return Warrior
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get armor
     *
     * @return string
     */
    public function getArmor()
    {
        return $this->armor;
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
     * Set title
     *
     * @param string $title
     *
     * @return Warrior
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
