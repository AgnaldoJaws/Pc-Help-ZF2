<?php

namespace Pc_help\Entity;

use Doctrine\ORM\EntityRepository;

class ClienteRepository extends EntityRepository {
	public function fetchPairs() {
		$entity = $this->findAll ();
		
		$array = array ();
		
		foreach ( $entity as $entity ) {
			$array [$entity->getCodCli ()] = $entity->getNomeCliente ();
		}
		return $array;
	}
	//exemplo de join com querybilder
	public function findByCategoria($categoriaId) {
		return $this->createQueryBuilder ( 'p' )-> // iremos consultar os produtos, esta primeira linha faz um select p.* from produtos

		leftJoin ( 'p.categoria', 'c' )-> // aqui é feito um join, ou seja, LEFT JOIN categorias c ON p.categoria_id = c.id

		andWhere ( 'c.id : categoria' )-> // um where para consultarmos os produtos daquela categoria em específico

		setParameter ( 'categoria', ( int ) $categoriaId )-> // passamos o parâmetro que queremos procurar

		getQuery ()->getResult (); // pegamos a query formulada e a executamos e pegamos o resultado
	}
}