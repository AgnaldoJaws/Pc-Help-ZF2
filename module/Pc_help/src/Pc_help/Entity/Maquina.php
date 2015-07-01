<?php

namespace Pc_help\Entity;

use Pc_help\Entity\Configurator;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="maquina")
 */
class Maquina {
	public function __construct($options = null) {
		Configurator::configure ( $this, $options );
	}
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 *
	 * @var int
	 */
	protected $cod_maq;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Pc_help\Entity\Cliente", inversedBy="maquina")
	 * @ORM\JoinColumn(name="cod_cli", referencedColumnName="cod_cli")
	 */
	protected $cliente;
	
	/**
	 * @ORM\OneToMany(targetEntity="Pc_help\Entity\Problema",mappedBy="maquina")
	 */
	protected $problema;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $tipo;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $marca;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $modelo;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $cor;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $processador;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $tela;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $grafico;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $ram;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $hd;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $obs;
	public function getCodMaq() {
		return $this->cod_maq;
	}
	public function setCodMaq($cod_maq) {
		$this->cod_maq = $cod_maq;
		return $this;
	}
	public function getCliente() {
		return $this->cliente;
	}
	public function setCliente($cliente) {
		$this->cliente = $cliente;
		return $this;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo = $tipo;
		return $this;
	}
	public function getMarca() {
		return $this->marca;
	}
	public function setMarca($marca) {
		$this->marca = $marca;
		return $this;
	}
	public function getModelo() {
		return $this->modelo;
	}
	public function setModelo($modelo) {
		$this->modelo = $modelo;
		return $this;
	}
	public function getCor() {
		return $this->cor;
	}
	public function setCor($cor) {
		$this->cor = $cor;
		return $this;
	}
	public function getProcessador() {
		return $this->processador;
	}
	public function setProcessador($processador) {
		$this->processador = $processador;
		return $this;
	}
	public function getTela() {
		return $this->tela;
	}
	public function setTela($tela) {
		$this->tela = $tela;
		return $this;
	}
	public function getGrafico() {
		return $this->grafico;
	}
	public function setGrafico($grafico) {
		$this->grafico = $grafico;
		return $this;
	}
	public function getRam() {
		return $this->ram;
	}
	public function setRam($ram) {
		$this->ram = $ram;
		return $this;
	}
	public function getHd() {
		return $this->hd;
	}
	public function setHd($hd) {
		$this->hd = $hd;
		return $this;
	}
	public function getObs() {
		return $this->obs;
	}
	public function setObs($obs) {
		$this->obs = $obs;
		return $this;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getProblema() {
		return $this->problema;
	}
	
	/**
	 *
	 * @param mixed $problema        	
	 */
	public function setProblema($problema) {
		$this->problema = $problema;
	}
	public function toArray() {
		return array (
				'id' => $this->getCodMaq (),
				'cliente' => $this->getCliente (),
				'tipo' => $this->getTipo (),
				'marca' => $this->getMarca (),
				'modelo' => $this->getModelo (),
				'cor' => $this->getCor (),
				'processador' => $this->getProcessador (),
				'tela' => $this->getTela (),
				'grafico' => $this->getGrafico (),
				'ram' => $this->getRam (),
				'hd' => $this->getHd (),
				'obs' => $this->getObs (),
				'problema' => $this->getProblema () 
		);
	}
}




