<?php
namespace Pc_help\Entity;
use Pc_help\Entity\Configurator;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * @ORM\Entity
 * @ORM\Table(name="OS")
 *
 */
class Problema {

    public function __construct($options = null)
    {
        Configurator::configure($this, $options);

    }


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $cod_os;


    /**
     * @ORM\ManyToOne(targetEntity="Pc_help\Entity\Maquina", inversedBy="problema")
     * @ORM\JoinColumn(name="cod_maq", referencedColumnName="cod_maq")
     */
    protected $maquina;





    /**
     * @ORM\OneToMany(targetEntity="Pc_help\Entity\Solucao",mappedBy="problema")
     */
    protected $solucao;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    protected $problem;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    protected $obs;

    /**
     * @return int
     */
    public function getCodOs()
    {
        return $this->cod_os;
    }

    /**
     * @param int $cod_os
     */
    public function setCodOs($cod_os)
    {
        $this->cod_os = $cod_os;
    }

    /**
     * @return mixed
     */
    public function getMaquina()
    {
        return $this->maquina;
    }

    /**
     * @param mixed $maquina
     */
    public function setMaquina($maquina)
    {
        $this->maquina = $maquina;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * @param string $problem
     */
    public function setProblem($problem)
    {
        $this->problem = $problem;
    }



    /**
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param string $obs
     */
    public function setObs($obs)
    {
        $this->obs = $obs;
    }

    /**
     * @return mixed
     */
    public function getSolucao()
    {
        return $this->solucao;
    }

    /**
     * @param mixed $solucao
     */
    public function setSolucao($solucao)
    {
        $this->solucao = $solucao;
    }





    public function toArray() {
        return array (
            'id' => $this->getCodOs(),
            'maquina' => $this->getMaquina(),
            'status' => $this->getStatus(),
            'problema'=>$this->getProblem(),
            'obs'=>$this->getObs(),
            'solucao'=>$this->getSolucao()

        );
    }

}




