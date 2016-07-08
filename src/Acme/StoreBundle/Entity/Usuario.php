<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="id_rol", columns={"id_rol"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=25, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=25, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_usuario", type="string", length=50, nullable=false)
     */
    private $nombreUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rol", type="integer", nullable=false)
     */
    private $idRol;


}

