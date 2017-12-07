<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreado", type="datetime")
     */
    private $fechacreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaestado", type="datetime")
     */
    private $fechaestado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacierre", type="datetime", nullable=true)
     */
    private $fechacierre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionproblema", type="string", length=255)
     */
    private $descripcionproblema;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria", type="integer")
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridad", type="string", length=10)
     */
    private $prioridad;

    /**
     * @var int
     *
     * @ORM\Column(name="usuariosolicitante", type="integer")
     */
    private $usuariosolicitante;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioasignado", type="integer", nullable=true)
     */
    private $usuarioasignado;


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
     * Set fechacreado
     *
     * @param \DateTime $fechacreado
     *
     * @return Ticket
     */
    public function setFechacreado($fechacreado)
    {
        $this->fechacreado = $fechacreado;

        return $this;
    }

    /**
     * Get fechacreado
     *
     * @return \DateTime
     */
    public function getFechacreado()
    {
        return $this->fechacreado;
    }

    /**
     * Set fechaestado
     *
     * @param \DateTime $fechaestado
     *
     * @return Ticket
     */
    public function setFechaestado($fechaestado)
    {
        $this->fechaestado = $fechaestado;

        return $this;
    }

    /**
     * Get fechaestado
     *
     * @return \DateTime
     */
    public function getFechaestado()
    {
        return $this->fechaestado;
    }

    /**
     * Set fechacierre
     *
     * @param \DateTime $fechacierre
     *
     * @return Ticket
     */
    public function setFechacierre($fechacierre)
    {
        $this->fechacierre = $fechacierre;

        return $this;
    }

    /**
     * Get fechacierre
     *
     * @return \DateTime
     */
    public function getFechacierre()
    {
        return $this->fechacierre;
    }

    /**
     * Set descripcionproblema
     *
     * @param string $descripcionproblema
     *
     * @return Ticket
     */
    public function setDescripcionproblema($descripcionproblema)
    {
        $this->descripcionproblema = $descripcionproblema;

        return $this;
    }

    /**
     * Get descripcionproblema
     *
     * @return string
     */
    public function getDescripcionproblema()
    {
        return $this->descripcionproblema;
    }

    /**
     * Set categoria
     *
     * @param integer $categoria
     *
     * @return Ticket
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return int
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Ticket
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

    /**
     * Set prioridad
     *
     * @param string $prioridad
     *
     * @return Ticket
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set usuariosolicitante
     *
     * @param integer $usuariosolicitante
     *
     * @return Ticket
     */
    public function setUsuariosolicitante($usuariosolicitante)
    {
        $this->usuariosolicitante = $usuariosolicitante;

        return $this;
    }

    /**
     * Get usuariosolicitante
     *
     * @return int
     */
    public function getUsuariosolicitante()
    {
        return $this->usuariosolicitante;
    }

    /**
     * Set usuarioasignado
     *
     * @param integer $usuarioasignado
     *
     * @return Ticket
     */
    public function setUsuarioasignado($usuarioasignado)
    {
        $this->usuarioasignado = $usuarioasignado;

        return $this;
    }

    /**
     * Get usuarioasignado
     *
     * @return int
     */
    public function getUsuarioasignado()
    {
        return $this->usuarioasignado;
    }
}

