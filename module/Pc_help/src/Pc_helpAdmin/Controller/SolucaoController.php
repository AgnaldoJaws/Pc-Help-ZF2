<?php
namespace Pc_helpAdmin\Controller;



use Zend\Mvc\Controller\AbstractActionController,
     Zend\View\Model\ViewModel;

use Zend\Paginator\Paginator,
Zend\Paginator\Adapter\ArrayAdapter;


use Pc_helpAdmin\Form\Solucao as Frmsolucao;

class SolucaoController extends AbstractActionController
{
	/**
	 * @var EntityManager
	 */
	
	protected $em;



    public function newAction (){
        $form = new Frmsolucao();
        $request = $this->getRequest();

        $repository = $this->getEm()->getRepository('Pc_help\Entity\Problema');
        $entity = $repository->find($this->params()->fromRoute('id', 0));

        if ($this->params()->fromRoute('id', 0))
            $form->setData($entity->toArray());

       if ($request->isPost()){
            $form->setData($request->getPost());

            if ($form->isValid()){
                $service = $this->getServiceLocator()->get('Pc_help\Service\Solucao');
                $service->insert($request->getPost()->toArray());
                return $this->redirect()->toRoute('pc_helpAdmin', array('controller' => 'clientes' ));
            }


        }



        return new ViewModel(array('form'=>$form));
}




	/*
	 * @return EntityManager
	 */
	
	protected function getEm(){
		
		if (null===$this->em)
			$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		return  $this->em;
	}
	
}
