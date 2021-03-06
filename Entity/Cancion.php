<?php

namespace Poli\VotosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cancion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poli\VotosBundle\Entity\CancionRepository")
 */
class Cancion extends Votado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="interprete", type="string", length=255)
     */
    private $interprete;
    
     /**
     * @ORM\ManyToOne(targetEntity="Album", inversedBy="canciones")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    protected $album;


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
     * Set interprete
     *
     * @param string $interprete
     * @return Cancion
     */
    public function setInterprete($interprete)
    {
        $this->interprete = $interprete;

        return $this;
    }

    /**
     * Get interprete
     *
     * @return string 
     */
    public function getInterprete()
    {
        return $this->interprete;
    }

    /**
     * Set album
     *
     * @param \Poli\VotosBundle\Entity\Album $album
     * @return Cancion
     */
    public function setAlbum(\Poli\VotosBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \Poli\VotosBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
