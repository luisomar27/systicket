<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioCategoria
 *
 * @ORM\Table(name="usuario_categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioCategoriaRepository")
 */
class UsuarioCategoria
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
     * @ORM\Column(name="usuarioid", type="integer")
     */
    private $usuarioid;

    /**
     * @var int
     *
     * @ORM\Column(name="categoriaid", type="integer")
     */
    private $categoriaid;


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
     * Set usuarioid
     *
     * @param integer $usuarioid
     *
     * @return UsuarioCategoria
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
     * Set categoriaid
     *
     * @param integer $categoriaid
     *
     * @return UsuarioCategoria
     */
    public function setCategoriaid($categoriaid)
    {
        $this->categoriaid = $categoriaid;

        return $this;
    }

    /**
     * Get categoriaid
     *
     * @return int
     */
    public function getCategoriaid()
    {
        return $this->categoriaid;
    }
}

