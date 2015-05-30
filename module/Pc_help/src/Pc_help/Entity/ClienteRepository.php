<?php
namespace Pc_help\Entity;

use Doctrine\ORM\EntityRepository;

class ClienteRepository extends EntityRepository {
	
	public function  fetchPairs(){
     $entity = $this->findAll();

        $array = array();

        foreach ($entity as $entity) {
            $array[$entity->getCodCli()] = $entity->getNomeCliente();
        }
        return $array;

    }
	
}