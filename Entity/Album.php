<?php

namespace Poli\VotosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Entity(repositoryClass="Poli\VotosBundle\Entity\AlbumRepository")
 */
class Album extends Votado
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
     * @ORM\OneToMany(targetEntity="Cancion", mappedBy="album")
     */
    protected $canciones;
    
    /**
     * @ORM\OneToMany(targetEntity="Artista", mappedBy="album")
     */
    protected $artistas;

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
     * Constructor
     */
    public function __construct()
    {
        $this->canciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->artistas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add canciones
     *
     * @param \Poli\VotosBundle\Entity\Cancion $canciones
     * @return Album
     */
    public function addCancione(\Poli\VotosBundle\Entity\Cancion $canciones)
    {
        $this->canciones[] = $canciones;

        return $this;
    }

    /**
     * Remove canciones
     *
     * @param \Poli\VotosBundle\Entity\Cancion $canciones
     */
    public function removeCancione(\Poli\VotosBundle\Entity\Cancion $canciones)
    {
        $this->canciones->removeElement($canciones);
    }

    /**
     * Get canciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCanciones()
    {
        return $this->canciones;
    }

    /**
     * Add artistas
     *
     * @param \Poli\VotosBundle\Entity\Artista $artistas
     * @return Album
     */
    public function addArtista(\Poli\VotosBundle\Entity\Artista $artistas)
    {
        $this->artistas[] = $artistas;

        return $this;
    }

    /**
     * Remove artistas
     *
     * @param \Poli\VotosBundle\Entity\Artista $artistas
     */
    public function removeArtista(\Poli\VotosBundle\Entity\Artista $artistas)
    {
        $this->artistas->removeElement($artistas);
    }

    /**
     * Get artistas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArtistas()
    {
        return $this->artistas;
    }
}
