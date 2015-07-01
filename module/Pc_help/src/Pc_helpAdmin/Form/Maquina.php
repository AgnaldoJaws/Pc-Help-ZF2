<?php

namespace Pc_helpAdmin\Form;

use Zend\Form\Form;

class Maquina extends Form {
	public function __construct($name = null) {
		parent::__construct ( 'maquina' );
		
		$this->setAttribute ( 'method', 'post' );
		
		$this->add ( array (
				'name' => 'id',
				'attibutes' => array (
						'type' => 'hidden' 
				)
				 
		) );
		
		$this->add ( array (
				'name' => 'tipo',
				'options' => array (
						'type' => 'text',
						'label' => 'Tipo' 
				),
				'attributes' => array (
						'id' => 'tipo' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'marca',
				'options' => array (
						'type' => 'text',
						'label' => 'Marca' 
				),
				'attributes' => array (
						'id' => 'marca' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'modelo',
				'options' => array (
						'type' => 'text',
						'label' => 'modelo' 
				),
				'attributes' => array (
						'id' => 'modelo' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'cor',
				'options' => array (
						'type' => 'text',
						'label' => 'cor' 
				),
				'attributes' => array (
						'id' => 'cor' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'processador',
				'options' => array (
						'type' => 'text',
						'label' => 'processador' 
				),
				'attributes' => array (
						'id' => 'processador' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'tela',
				'options' => array (
						'type' => 'text',
						'label' => 'tela' 
				),
				'attributes' => array (
						'id' => 'tela' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'grafico',
				'options' => array (
						'type' => 'text',
						'label' => 'grafico' 
				),
				'attributes' => array (
						'id' => 'grafico' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'ram',
				'options' => array (
						'type' => 'text',
						'label' => 'ram' 
				),
				'attributes' => array (
						'id' => 'ram' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'hd',
				'options' => array (
						'type' => 'text',
						'label' => 'hd' 
				),
				'attributes' => array (
						'id' => 'hd' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'obs',
				'options' => array (
						'type' => 'text',
						'label' => 'obs' 
				),
				'attributes' => array (
						'id' => 'obs' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'submit',
				'type' => 'submit',
				'attributes' => array (
						'type' => 'submit',
						'class' => 'btn-cucces' 
				),
				'options' => array (
						'label' => 'Enviar' 
				) 
		) );
	}
}




