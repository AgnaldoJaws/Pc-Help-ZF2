<?php

namespace Pc_helpAdmin\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Form\Element\Textarea;


class Problem extends Form {

    public function __construct($name = null) {
        parent::__construct('problem');

        $this->setAttribute('method', 'post');





        $this->add(array(
            'name' => 'id',
            'options' => array(
                'type' => 'text',
                'label' => 'id'
            ),
            'attributes' => array(
                'id' => 'id',
            ),

        ));

        $this->add(array(
            'name' => 'status',
            'options' => array(
                'type' => 'text',
                'label' => 'status'
            ),
            'attributes' => array(
                'id' => 'status',
            ),

        ));


        $this->add(array(
            'name' => 'problem',
            'options' => array(
                'type' => 'text',
                'label' => 'problema'
            ),
            'attributes' => array(
                'id' => 'problema',
            ),

        ));



        $this->add(array(
            'name' => 'obs',
            'options' => array(
                'type' => 'text',
                'label' => 'obs'
            ),
            'attributes' => array(
                'id' => 'obs',
            ),

        ));






        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array('type' => 'submit', 'class' => 'btn-cucces'),
            'options' => array('label' => 'Enviar')
        ));



    }




}




