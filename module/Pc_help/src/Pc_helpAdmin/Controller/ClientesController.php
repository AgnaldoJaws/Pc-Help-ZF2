<?php

namespace Pc_helpAdmin\Controller;

use DOMPDFModule\View\Model\PdfModel;
use Zend\Mvc\Controller\AbstractActionController, Zend\View\Model\ViewModel;
use Zend\Paginator\Paginator, Zend\Paginator\Adapter\ArrayAdapter;
use Pc_helpAdmin\Controller\SolucaoController as m;
use \DOMPDF;
use Pc_helpAdmin\Form\Cliente as FrmCliente;

class ClientesController extends AbstractActionController {
	/**
	 *
	 * @var EntityManager
	 */
	protected $em;
	public function searchAction() {
		$form = new FrmCliente ();
		$id = $this->getRequest ()->getPost ( 'cpf' );
		$em = $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' );
		$idConsulta = $id;
		// $query = $em->createQuery("SELECT u FROM Pc_help\Entity\Maquina u JOIN u.cliente a WHERE a.cpf = :cpf");
		$query = $em->createQuery ( 'SELECT u FROM Pc_help\Entity\Cliente u WHERE (u.cpf = :cpf)' );
		$query->setParameter ( 'cpf', array (
				$idConsulta 
		) );
		$users = $query->getResult ();
		return new ViewModel ( array (
				'data' => $users 
		) );
	}
	public function entradaAction() {
		// ----------FATORAR ESTE TRECHO---ABSTRAIR CONSULTA POR CPF----CRIAR UM SERCIÇO PARA PDF--/
		$id = $this->params ()->fromRoute ( 'id', 0 );
		
		$dompdf = new DOMPDF ();
		
		$viewRender = $this->getServiceLocator ()->get ( 'ViewRenderer' );
		
		$viewModel = new ViewModel ();
		
		$viewModel->setTemplate ( "pc_help-admin/clientes/entrada" );
		
		$em = $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' );
		$idConsulta = $id;
		$query = $em->createQuery ( 'SELECT u FROM Pc_help\Entity\Cliente u WHERE (u.cod_cli = :cod_cli)' );
		
		$query->setParameter ( 'cod_cli', array (
				$idConsulta 
		) );
		$users = $query->getResult ();
		
		$viewModel->setVariable ( 'data', $users ); // variaveis a serem passadas para o template
		
		$html = $viewRender->render ( $viewModel );
		
		$dompdf->load_html ( $html );
		$dompdf->render ();
		$dompdf->stream ( "saida.pdf", array (
				"Attachment" => false 
		) );
	}
	// -----------------------------------------------------------------------------------------/
	public function indexAction() {
		$form = new FrmCliente ();
		
		return new ViewModel ( array (
				'form' => $form 
		) );
	}
	public function newAction() {
		$form = new FrmCliente ();
		
		$request = $this->getRequest ();
		
		if ($request->isPost ()) {
			$form->setData ( $request->getPost () );
			if ($form->isValid ()) {
				$service = $this->getServiceLocator ()->get ( 'Pc_help\Service\Cliente' );
				$service->insert ( $request->getPost ()->toArray () );
				
				return $this->redirect ()->toRoute ( 'pc_helpAdmin', array (
						'controller' => 'clientes' 
				) );
			}
		}
		return new ViewModel ( array (
				'form' => $form 
		) );
	}
	public function editAction() {
		$form = new FrmCliente ();
		$request = $this->getRequest ();
		
		$repository = $this->getEm ()->getRepository ( 'Pc_help\Entity\Cliente' );
		$entity = $repository->find ( $this->params ()->fromRoute ( 'id', 0 ) );
		
		if ($this->params ()->fromRoute ( 'id', 0 ))
			$form->setData ( $entity->toArray () );
		
		if ($request->isPost ()) {
			$form->setData ( $request->getPost () );
			if ($form->isValid ()) {
				$service = $this->getServiceLocator ()->get ( 'Pc_help\Service\Cliente' );
				$service->update ( $request->getPost ()->toArray () );
				
				return $this->redirect ()->toRoute ( 'pc_helpAdmin', array (
						'controller' => 'clientes' 
				) );
			}
		}
		
		return new ViewModel ( array (
				'form' => $form 
		) );
	}
	public function deleteAction() {
		$service = $this->getServiceLocator ()->get ( 'Pc_help\Service\Cliente' );
		if ($service->delete ( $this->params ()->fromRoute ( 'id', 0 ) ))
			;
		return $this->redirect ()->toRoute ( 'pc_helpAdmin', array (
				'controller' => 'clientes' 
		) );
	}
	
	/*
	 * @return EntityManager
	 */
	protected function getEm() {
		if (null === $this->em)
			$this->em = $this->getServiceLocator ()->get ( 'Doctrine\ORM\EntityManager' );
		return $this->em;
	}
}
