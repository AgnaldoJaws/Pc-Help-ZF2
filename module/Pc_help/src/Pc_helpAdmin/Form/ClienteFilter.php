<?php
namespace Pc_helpAdmin\Form;

use Zend\Filter\StringTrim;

use Zend\InputFilter\InputFilter;

class ClienteFilter extends InputFilter{
	
	public function __construct() {
		
		$this->add(array(
				'name'=>'nome_cliente',
				'required'=> true,
				'filters'=>array(
					array('name'=>'stripTags'),
					array('name'=>'StringTrim')	
						
						),
				
				'validators'=> array(
						array(
								
							'name'=>'NotEmpty',
								'options'=>array(
									'messages'=>array('isEmpty'=>'Nome não pode estar em branco')	
								)	
							)
						)
					));
		
		
		
	}
	
}