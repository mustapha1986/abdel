<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 09:43
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Character
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharacterRepository")
 * */
class Archer extends Pcharacter
{

    /**
     * @var armor
     * @ORM\Column(name="leather", type="string", length=25)
     *
     */
    protected $leather;



    /**
     * Set leather
     *
     * @param string $leather
     *
     * @return Archer
     */
    public function setLeather($leather)
    {
        $this->leather = $leather;

        return $this;
    }

    /**
     * Get leather
     *
     * @return string
     */
    public function getLeather()
    {
        return $this->leather;
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
     * @return Archer
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
