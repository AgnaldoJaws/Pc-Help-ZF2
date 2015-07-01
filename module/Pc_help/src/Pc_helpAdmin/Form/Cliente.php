<?php

namespace Pc_helpAdmin\Form;

use Doctrine\ORM\EntityManager;
use Zend\Form\Form, Zend\Form\Element\Select;

class Cliente extends Form {
	protected $tipoPessoa;
	public function __construct($name = null) {
		parent::__construct ( 'cliente' );
		
		$this->setAttribute ( 'method', 'post' );
		
		$this->add ( array (
				'name' => 'id',
				'attibutes' => array (
						'type' => 'hidden' 
				)
				 
		) );
		
		$tipoPessoa = new Select ();
		$tipoPessoa->setLabel ( "Tipo Pessoa" )->setName ( "tipoPessoa" )->setOptions ( array (
				'value_options' => array (
						'1' => 'Selecio o tipo de Pessoa',
						'FISICA' => 'Fisica',
						'JURIDICA' => 'Juridica' 
				) 
		)
		 );
		$this->add ( $tipoPessoa );
		
		$cidade = new Select ();
		$cidade->setLabel ( "Cidade" )->setName ( "cidade" )->setOptions ( array (
				'value_options' => array (
						'1' => 'Selecio a cidade',
						'cananeia' => 'Cananeia',
						'registro' => 'Registro',
						'juquia' => 'Juquia' 
				) 
		)
		 );
		$this->add ( $cidade );
		
		$this->add ( array (
				'name' => 'nome_empresa',
				'options' => array (
						'type' => 'text',
						'label' => 'Nome Empresa ' 
				),
				'attributes' => array (
						'id' => 'nome_empresa ',
						'placeholder' => 'Nome Empresa ' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'nome_cliente',
				'options' => array (
						'type' => 'text',
						'label' => 'Nome' 
				),
				'attributes' => array (
						'id' => 'nome_cliente',
						'placeholder' => 'Entre com o nome' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'endereco',
				'options' => array (
						'type' => 'text',
						'label' => 'Endereco' 
				),
				'attributes' => array (
						'id' => 'endereco',
						'placeholder' => 'endereco' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'bairro',
				'options' => array (
						'type' => 'text',
						'label' => 'Bairro' 
				),
				'attributes' => array (
						'id' => 'bairro',
						'placeholder' => 'Bairro' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'estado',
				'options' => array (
						'type' => 'text',
						'label' => 'Estado' 
				),
				'attributes' => array (
						'id' => 'estado',
						'placeholder' => 'Estado' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'complemento',
				'options' => array (
						'type' => 'text',
						'label' => 'Complemento' 
				),
				'attributes' => array (
						'id' => 'bairro',
						'placeholder' => 'Bairro' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'complemento',
				'options' => array (
						'type' => 'text',
						'label' => 'Complemento' 
				),
				'attributes' => array (
						'id' => 'bairro',
						'placeholder' => 'Bairro' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'cnpj',
				'options' => array (
						'type' => 'text',
						'label' => 'Cnpj' 
				),
				'attributes' => array (
						'id' => 'cnpj',
						'placeholder' => 'Cnpj' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'ie',
				'options' => array (
						'type' => 'text',
						'label' => 'Ie' 
				),
				'attributes' => array (
						'id' => 'ie',
						'placeholder' => 'Ie' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'razao_social',
				'options' => array (
						'type' => 'text',
						'label' => 'razao_social' 
				),
				'attributes' => array (
						'id' => 'razao_social',
						'placeholder' => 'razao_social' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'cpf',
				'options' => array (
						'type' => 'text',
						'label' => '' 
				),
				'attributes' => array (
						'id' => 'cpf',
						'placeholder' => 'Cpf' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'rg',
				'options' => array (
						'type' => 'text',
						'label' => 'Rg' 
				),
				'attributes' => array (
						'id' => 'rg',
						'placeholder' => 'rg' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'celular',
				'options' => array (
						'type' => 'text',
						'label' => 'Celular' 
				),
				'attributes' => array (
						'id' => 'celular',
						'placeholder' => 'Celular' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'telefone',
				'options' => array (
						'type' => 'text',
						'label' => 'Telefone' 
				),
				'attributes' => array (
						'id' => 'telefone',
						'placeholder' => 'Telefone' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'email',
				'options' => array (
						'type' => 'text',
						'label' => 'email' 
				),
				'attributes' => array (
						'id' => 'email',
						'placeholder' => 'Email' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'cep',
				'options' => array (
						'type' => 'text',
						'label' => 'cep' 
				),
				'attributes' => array (
						'id' => 'cep',
						'placeholder' => 'Cep' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'skype',
				'options' => array (
						'type' => 'text',
						'label' => 'skype' 
				),
				'attributes' => array (
						'id' => 'skype',
						'placeholder' => 'Skype' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'submit',
				'type' => 'submit',
				'attributes' => array (
						'type' => 'submit',
						'class' => 'btn btn-success' 
				),
				'options' => array (
						'label' => 'Ok' 
				) 
		) );
	}
}




