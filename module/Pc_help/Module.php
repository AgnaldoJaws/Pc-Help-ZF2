<?php


namespace Pc_help;



use    Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent,
Zend\ModuleManager\ModuleManager;

use Pc_help\Service\ClienteTable;

use Pc_help\Service\Cliente as ServicoCliente;
use Pc_help\Service\Maquina as ServiceMaquina;
use Pc_help\Service\Problema as ServiceProblema;
use Pc_help\Service\Solucao as ServiceSolucao;



class Module


{
	public function onBootstrap(MvcEvent $e)
	{
		$eventManager        = $e->getApplication()->getEventManager();
		$moduleRouteListener = new ModuleRouteListener();
		$moduleRouteListener->attach($eventManager);


	}



	 


	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\StandardAutoloader' => array(
						'namespaces' => array(
								__NAMESPACE__.'Admin' => __DIR__ . '/src/' . __NAMESPACE__."Admin",
								__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
						),
				),
		);
	}

	public function getServiceConfig (){

		return array(
				'factories'=>array(
						
						'Pc_help\Model\ClienteService' => function ($service){
						$dbAdapter = $service->get('Zend\Db\Adapter\Adapter');
						$clienteTable = new ClienteTable($dbAdapter);
						$clienteService = new Model\ClienteService($clienteTable);
						return $clienteService;


		},
				 
		'Pc_help\Service\Cliente'=>function($service){
		 
		return new ServicoCliente($service->get('Doctrine\ORM\EntityManager'));
		 
		},
                    'Pc_help\Service\Maquina'=>function($service){

                        return new ServiceMaquina($service->get('Doctrine\ORM\EntityManager'));

                    },

                    'Pc_help\Service\Problema'=>function($service){

                        return new ServiceProblema($service->get('Doctrine\ORM\EntityManager'));

                    },
                    'Pc_help\Service\Solucao'=>function($service){

                        return new ServiceSolucao($service->get('Doctrine\ORM\EntityManager'));

                    },

		 
		 
		),

		 
		 
		 
		 
		);
		 
		 
		 
		 
		 
	}
}
