<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialTicket
 *
 * @ORM\Table(name="historial_ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HistorialTicketRepository")
 */
class HistorialTicket
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
     * @ORM\Column(name="fecharegistro", type="datetime")
     */
    private $fecharegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20)
     */
    private $estado;


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
     * @return HistorialTicket
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
     * @return HistorialTicket
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
     * Set fecharegistro
     *
     * @param \DateTime $fecharegistro
     *
     * @return HistorialTicket
     */
    public function setFecharegistro($fecharegistro)
    {
        $this->fecharegistro = $fecharegistro;

        return $this;
    }

    /**
     * Get fecharegistro
     *
     * @return \DateTime
     */
    public function getFecharegistro()
    {
        return $this->fecharegistro;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return HistorialTicket
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

