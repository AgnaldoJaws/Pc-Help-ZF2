<?php

namespace Pc_help\Service;

use Doctrine\ORM\EntityManager;
use Pc_help\Entity\Maquina as clienteService;
use Pc_help\Entity\Configurator;



class Maquina  {

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(EntityManager $em) {

        $this->em = $em;
    }



    public function insert (array $data){

        $maquina = new clienteService($data);

       $cliente = $this->em->getReference("Pc_help\Entity\Cliente", $data['id']);

        $maquina->setCliente($cliente);

        $this->em->persist($maquina);
        $this->em->flush();
        return $maquina;
    }






}