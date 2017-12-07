<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotasRepository")
 */
class Notas
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
     * @var int
     *
     * @ORM\Column(name="ticketid", type="integer")
     */
    private $ticketid;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioid", type="integer")
     */
    private $usuarioid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechanota", type="datetime")
     */
    private $fechanota;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionnota", type="string", length=255)
     */
    private $descripcionnota;


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
     * Set ticketid
     *
     * @param integer $ticketid
     *
     * @return Notas
     */
    public function setTicketid($ticketid)
    {
        $this->ticketid = $ticketid;

        return $this;
    }

    /**
     * Get ticketid
     *
     * @return int
     */
    public function getTicketid()
    {
        return $this->ticketid;
    }

    /**
     * Set usuarioid
     *
     * @param integer $usuarioid
     *
     * @return Notas
     */
    public function setUsuarioid($usuarioid)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return int
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * Set fechanota
     *
     * @param \DateTime $fechanota
     *
     * @return Notas
     */
    public function setFechanota($fechanota)
    {
        $this->fechanota = $fechanota;

        return $this;
    }

    /**
     * Get fechanota
     *
     * @return \DateTime
     */
    public function getFechanota()
    {
        return $this->fechanota;
    }

    /**
     * Set descripcionnota
     *
     * @param string $descripcionnota
     *
     * @return Notas
     */
    public function setDescripcionnota($descripcionnota)
    {
        $this->descripcionnota = $descripcionnota;

        return $this;
    }

    /**
     * Get descripcionnota
     *
     * @return string
     */
    public function getDescripcionnota()
    {
        return $this->descripcionnota;
    }
}

