<?php
namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="Area")
 * @ORM\Entity
 */
class Area
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
}