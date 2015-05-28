<?php

namespace Pc_help\Service;

use    Doctrine\ORM\EntityManager;
use Pc_help\Entity\Problema as problemaService;
use Pc_help\Entity\Configurator;



class Problema  {

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(EntityManager $em) {

        $this->em = $em;
    }



    public function insert (array $data){
        $entity = new problemaService($data);

        $maquina = $this->em->getReference("Pc_help\Entity\Maquina", $data['id']);


        $entity->setMaquina($maquina);
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;

    }






}