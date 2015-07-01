<?php

namespace Pc_help\Service;

use Doctrine\ORM\EntityManager;
use Pc_help\Entity\Solucao as solucaoService;
use Pc_help\Entity\Configurator;

class Solucao {
	
	/**
	 *
	 * @var EntityManager
	 */
	protected $em;
	public function __construct(EntityManager $em) {
		$this->em = $em;
	}
	public function insert(array $data) {
		$entity = new solucaoService ( $data );
		
		$problema = $this->em->getReference ( "Pc_help\Entity\Problema", $data ['id'] );
		
		$entity->setProblema ( $problema );
		$this->em->persist ( $entity );
		$this->em->flush ();
		return $entity;
	}
}