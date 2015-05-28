<?php
namespace Pc_help\Entity;
use Pc_help\Entity\Configurator;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * @ORM\Entity
 * @ORM\Table(name="teste")
  *
 */
class Teste {

    public function __construct($options = null)
    {
        Configurator::configure($this, $options);

    }


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected  $cod_os;

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

    public function toArray (){
        return array(
            'id' => $this->getCodMaq(),


        );
    }



}




