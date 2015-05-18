<?php
namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gerencia
 *
 * @ORM\Table(name="GerenciaArea")
 * @ORM\Entity
 */
class Gerencia
{

    /**
     *
     * @var integer $_id
     *     
     *      @ORM\Column(name="id", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $_id;

    /**
     *
     * @var string $_nome
     *      @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $_nome;

    /**
     *
     * @var Area @ORM\ManyToOne(targetEntity="Area")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="area", referencedColumnName="id")
     *      })
     */
    private $_area;

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->_nome;
    }

    public function setNome($nome)
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getArea()
    {
        return $this->_area;
    }

    public function setArea(Area $area)
    {
        $this->_area = $area;
        return $this;
    }
}