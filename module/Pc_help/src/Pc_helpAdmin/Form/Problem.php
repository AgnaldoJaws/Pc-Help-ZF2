<?php

namespace Pc_helpAdmin\Form;

use Zend\Form\Element;
use Zend\Form\Element\Textarea;
use Zend\Form\Form, Zend\Form\Element\Select;

class Problem extends Form {
	public function __construct($name = null) {
		parent::__construct ( 'problem' );
		
		$this->setAttribute ( 'method', 'post' );
		
		$this->add ( array (
				'name' => 'id',
				'options' => array (
						'type' => 'text',
						'label' => 'id' 
				),
				'attributes' => array (
						'id' => 'id' 
				) 
		)
		 );
		
		$status = new Select ();
		$status->setLabel ( "Status" )->setName ( "status" )->setOptions ( array (
				'value_options' => array (
						'3' => 'Selecio o status',
						'1' => 'Aberto',
						'2' => 'Fechado' 
				) 
		)
		 );
		$this->add ( $status );
		
		$this->add ( array (
				'name' => 'problem',
				'options' => array (
						'type' => 'text',
						'label' => 'problema' 
				),
				'attributes' => array (
						'id' => 'problema' 
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




