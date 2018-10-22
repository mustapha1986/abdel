<?php
/**
 * Created by PhpStorm.
 * User: maitidir
 * Date: 22/10/2018
 * Time: 09:42
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Character
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharacterRepository")
 * */
class Magician extends Pcharacter
{

    /**
     * @var silk
     * @ORM\Column(name="silk", type="string", length=25)
     *
     */
    protected $silk;




    /**
     * Set silk
     *
     * @param string $silk
     *
     * @return Magician
     */
    public function setSilk($silk)
    {
        $this->silk = $silk;

        return $this;
    }

    /**
     * Get silk
     *
     * @return string
     */
    public function getSilk()
    {
        return $this->silk;
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
     * @return Magician
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
