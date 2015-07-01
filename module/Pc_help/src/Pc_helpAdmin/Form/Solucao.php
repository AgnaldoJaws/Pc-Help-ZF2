<?php

namespace Pc_helpAdmin\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Form\Element\Textarea;

class Solucao extends Form {
	public function __construct($name = null) {
		parent::__construct ( 'solucao' );
		
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
		
		$this->add ( array (
				'name' => 'status',
				'options' => array (
						'type' => 'text',
						'label' => 'status' 
				),
				'attributes' => array (
						'id' => 'status' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'data_bertura',
				'options' => array (
						'type' => 'text',
						'label' => 'data_bertura' 
				),
				'attributes' => array (
						'id' => 'data_bertura' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'desc_solucao',
				'options' => array (
						'type' => 'text',
						'label' => 'desc_solucao' 
				),
				'attributes' => array (
						'id' => 'desc_solucao' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'peca_trocada',
				'options' => array (
						'type' => 'text',
						'label' => 'peca_trocada' 
				),
				'attributes' => array (
						'id' => 'peca_trocada' 
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
				'name' => 'marca',
				'options' => array (
						'type' => 'text',
						'label' => 'marca' 
				),
				'attributes' => array (
						'id' => 'marca' 
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
				'name' => 'data_garantia',
				'options' => array (
						'type' => 'text',
						'label' => 'data_garantia' 
				),
				'attributes' => array (
						'id' => 'data_garantia' 
				) 
		)
		 );
		
		$this->add ( array (
				'name' => 'temp_garantia',
				'options' => array (
						'type' => 'text',
						'label' => 'temp_garantia' 
				),
				'attributes' => array (
						'id' => 'temp_garantia' 
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




