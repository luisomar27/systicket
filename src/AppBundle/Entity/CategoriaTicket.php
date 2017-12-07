<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaTicket
 *
 * @ORM\Table(name="categoria_ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaTicketRepository")
 */
class CategoriaTicket
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
     * @ORM\Column(name="nombrecategoria", type="string", length=50)
     */
    private $nombrecategoria;


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
     * Set nombrecategoria
     *
     * @param string $nombrecategoria
     *
     * @return CategoriaTicket
     */
    public function setNombrecategoria($nombrecategoria)
    {
        $this->nombrecategoria = $nombrecategoria;

        return $this;
    }

    /**
     * Get nombrecategoria
     *
     * @return string
     */
    public function getNombrecategoria()
    {
        return $this->nombrecategoria;
    }
}

