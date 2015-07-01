<?php

namespace Pc_help\Entity;

use Pc_help\Entity\Configurator;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="solucao")
 */
class Solucao {
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
	protected $cod_sol;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Pc_help\Entity\problema", inversedBy="solucao")
	 * @ORM\JoinColumn(name="cod_os", referencedColumnName="cod_os")
	 */
	protected $problema;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $status;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $data_bertura;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $desc_solucao;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $peca_trocada;
	
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
	protected $marca;
	
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
	protected $data_garantia;
	
	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $temp_garantia;
	
	/**
	 *
	 * @return int
	 */
	public function getCodSol() {
		return $this->cod_sol;
	}
	
	/**
	 *
	 * @param int $cod_sol        	
	 */
	public function setCodSol($cod_sol) {
		$this->cod_sol = $cod_sol;
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
	
	/**
	 *
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 *
	 * @param string $status        	
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDataBertura() {
		return $this->data_bertura;
	}
	
	/**
	 *
	 * @param string $data_bertura        	
	 */
	public function setDataBertura($data_bertura) {
		$this->data_bertura = $data_bertura;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDescSolucao() {
		return $this->desc_solucao;
	}
	
	/**
	 *
	 * @param string $desc_solucao        	
	 */
	public function setDescSolucao($desc_solucao) {
		$this->desc_solucao = $desc_solucao;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getPecaTrocada() {
		return $this->peca_trocada;
	}
	
	/**
	 *
	 * @param string $peca_trocada        	
	 */
	public function setPecaTrocada($peca_trocada) {
		$this->peca_trocada = $peca_trocada;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getModelo() {
		return $this->modelo;
	}
	
	/**
	 *
	 * @param string $modelo        	
	 */
	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getMarca() {
		return $this->marca;
	}
	
	/**
	 *
	 * @param string $marca        	
	 */
	public function setMarca($marca) {
		$this->marca = $marca;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getRam() {
		return $this->ram;
	}
	
	/**
	 *
	 * @param string $ram        	
	 */
	public function setRam($ram) {
		$this->ram = $ram;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getHd() {
		return $this->hd;
	}
	
	/**
	 *
	 * @param string $hd        	
	 */
	public function setHd($hd) {
		$this->hd = $hd;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDataGarantia() {
		return $this->data_garantia;
	}
	
	/**
	 *
	 * @param string $data_garantia        	
	 */
	public function setDataGarantia($data_garantia) {
		$this->data_garantia = $data_garantia;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getTempGarantia() {
		return $this->temp_garantia;
	}
	
	/**
	 *
	 * @param string $temp_garantia        	
	 */
	public function setTempGarantia($temp_garantia) {
		$this->temp_garantia = $temp_garantia;
	}
	public function toArray() {
		return array (
				'id' => $this->getCodSol (),
				'problema' => $this->getProblema (),
				'status' => $this->getStatus (),
				'data_abertura' => $this->getDataBertura (),
				'desc_solucao' => $this->getDescSolucao (),
				'peca_trocada' => $this->getPecaTrocada (),
				'modelo' => $this->getModelo (),
				'marca' => $this->getMarca (),
				'ram' => $this->getRam (),
				'hd' => $this->getHd (),
				'data_garantia' => $this->getDataGarantia (),
				'tempo_garantia' => $this->getTempGarantia () 
		)
		;
	}
}




