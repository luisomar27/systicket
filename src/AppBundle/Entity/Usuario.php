<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="Nombres", type="string", length=85)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=170)
     */
    private $userLastname;

	/**
     * @var string
     *
     * @ORM\Column(name="Usuario", type="string", length=25)
     */
    private $nickname;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Clave", type="string", length=50)
     */
    private $password;
	
	/**
     * @var string
     *
     * @ORM\Column(name="TipoUsuario", type="string", length=50)
     */
    private $userType;
	
	/**
     * @var int
     *
     * @ORM\Column(name="Rol", type="integer")
     */
    private $idRol;
	
	/**
     * @var string
     *
     * @ORM\Column(name="EstadoUsuario", type="string", length=20)
     */
    private $userStatus;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaRegistroUsuario", type="datetime")
     */
    private $userCreateDate;

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
     * Set userName
     *
     * @param string $userName
     *
     * @return Usuario
     */
    public function setNombres($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->userName;
    }

    /**
     * Set userLastname
     *
     * @param string $userLastname
     *
     * @return Usuario
     */
    public function setApellidos($userLastname)
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    /**
     * Get userLastname
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->userLastname;
    }

   /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Usuario
     */
    public function setUsuario($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->nickname;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setClave($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getClave()
    {
        return $this->password;
    }
	
	   /**
     * Set userType
     *
     * @param string $userType
     *
     * @return Usuario
     */
    public function setTipoUsuario($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getTipoUsuario()
    {
        return $this->userType;
    }

    /**
     * Set idRol
     *
     * @param integer $idRol
     *
     * @return Usuario
     */
    public function setRol($idRol)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return integer
     */
    public function getRol()
    {
        return $this->idRol;
    }

   /**
     * Set userStatus
     *
     * @param string $userStatus
     *
     * @return Usuario
     */
    public function setEstadoUsuario($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return string
     */
    public function getEstadoUsuario()
    {
        return $this->userStatus;
    }

    /**
     * Set userCreateDate
     *
     * @param \DateTime $userCreateDate
     *
     * @return Usuario
     */
    public function setFechaRegistroUsuario($userCreateDate)
    {
        $this->userCreateDate = $userCreateDate;

        return $this;
    }

    /**
     * Get userCreateDate
     *
     * @return \DateTime
     */
    public function getFechaRegistroUsuario()
    {
        return $this->userCreateDate;
    }
}