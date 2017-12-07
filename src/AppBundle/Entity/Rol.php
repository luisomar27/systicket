<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolRepository")
 */
class Rol
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
     * @var string
     *
     * @ORM\Column(name="nombrerol", type="string", length=50)
     */
    private $nombrerol;

    /**
     * @var string
     *
     * @ORM\Column(name="departamentoproyecto", type="string", length=85)
     */
    private $departamentoproyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set nombrerol
     *
     * @param string $nombrerol
     *
     * @return Rol
     */
    public function setNombrerol($nombrerol)
    {
        $this->nombrerol = $nombrerol;

        return $this;
    }

    /**
     * Get nombrerol
     *
     * @return string
     */
    public function getNombrerol()
    {
        return $this->nombrerol;
    }

    /**
     * Set departamentoproyecto
     *
     * @param string $departamentoproyecto
     *
     * @return Rol
     */
    public function setDepartamentoproyecto($departamentoproyecto)
    {
        $this->departamentoproyecto = $departamentoproyecto;

        return $this;
    }

    /**
     * Get departamentoproyecto
     *
     * @return string
     */
    public function getDepartamentoproyecto()
    {
        return $this->departamentoproyecto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Rol
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

