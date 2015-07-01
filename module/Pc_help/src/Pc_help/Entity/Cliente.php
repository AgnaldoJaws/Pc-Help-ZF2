<?php

namespace Pc_help\Entity;

use Pc_help\Entity\Configurator;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="Pc_help\Entity\ClienteRepository")
 */
class Cliente {
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
	protected $cod_cli;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $tipo_pessoa;
	
	/**
	 * @ORM\OneToMany(targetEntity="Pc_help\Entity\Maquina",mappedBy="cliente")
	 */
	protected $maquina;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $cidade;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $nome_cliente;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $nome_empresa;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $endereco;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $bairro;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $estado;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $complemento;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $cnpj;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $ie;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $razao_social;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $cpf;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $rg;
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $celular;
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $telefone;
	
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $email;
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $cep;
	/**
	 * @ORM\Column(type="text")
	 * 
	 * @var string
	 */
	protected $skype;
	/**
	 *
	 * @return int
	 */
	public function getCodCli() {
		return $this->cod_cli;
	}
	
	/**
	 *
	 * @param int $cod_cli        	
	 */
	public function setCodCli($cod_cli) {
		$this->cod_cli = $cod_cli;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getTipoPessoa() {
		return $this->tipo_pessoa;
	}
	
	/**
	 *
	 * @param string $tipo_pessoa        	
	 */
	public function setTipoPessoa($tipo_pessoa) {
		$this->tipo_pessoa = $tipo_pessoa;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 *
	 * @param string $cidade        	
	 */
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getNomeCliente() {
		return $this->nome_cliente;
	}
	
	/**
	 *
	 * @param string $nome_cliente        	
	 */
	public function setNomeCliente($nome_cliente) {
		$this->nome_cliente = $nome_cliente;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getNomeEmpresa() {
		return $this->nome_empresa;
	}
	
	/**
	 *
	 * @param string $nome_empresa        	
	 */
	public function setNomeEmpresa($nome_empresa) {
		$this->nome_empresa = $nome_empresa;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 *
	 * @param string $endereco        	
	 */
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getBairro() {
		return $this->bairro;
	}
	
	/**
	 *
	 * @param mixed $bairro        	
	 */
	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}
	
	/**
	 *
	 * @param mixed $estado        	
	 */
	public function setEstado($estado) {
		$this->estado = $estado;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getComplemento() {
		return $this->complemento;
	}
	
	/**
	 *
	 * @param mixed $complemento        	
	 */
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getCnpj() {
		return $this->cnpj;
	}
	
	/**
	 *
	 * @param string $cnpj        	
	 */
	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getIe() {
		return $this->ie;
	}
	
	/**
	 *
	 * @param string $ie        	
	 */
	public function setIe($ie) {
		$this->ie = $ie;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getRazaoSocial() {
		return $this->razao_social;
	}
	
	/**
	 *
	 * @param string $razao_social        	
	 */
	public function setRazaoSocial($razao_social) {
		$this->razao_social = $razao_social;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 *
	 * @param string $cpf        	
	 */
	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getRg() {
		return $this->rg;
	}
	
	/**
	 *
	 * @param string $rg        	
	 */
	public function setRg($rg) {
		$this->rg = $rg;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getCelular() {
		return $this->celular;
	}
	
	/**
	 *
	 * @param string $celular        	
	 */
	public function setCelular($celular) {
		$this->celular = $celular;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 *
	 * @param string $telefone        	
	 */
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 *
	 * @param string $email        	
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getCep() {
		return $this->cep;
	}
	
	/**
	 *
	 * @param string $cep        	
	 */
	public function setCep($cep) {
		$this->cep = $cep;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getSkype() {
		return $this->skype;
	}
	
	/**
	 *
	 * @param string $skype        	
	 */
	public function setSkype($skype) {
		$this->skype = $skype;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getMaquina() {
		return $this->maquina;
	}
	
	/**
	 *
	 * @param mixed $maquina        	
	 */
	public function setMaquina($maquina) {
		$this->maquina = $maquina;
	}
	public function toArray() {
		return array (
				'id' => $this->getCodCli (),
				'tipoPessoa' => $this->getTipoPessoa (),
				'cidade' => $this->getCidade (),
				'nome_cliente' => $this->getNomeCliente (),
				'nome_empresa' => $this->getNomeEmpresa (),
				'endereco' => $this->getEndereco (),
				'bairro' => $this->getBairro (),
				'estado' => $this->getEstado (),
				'complemento' => $this->getComplemento (),
				'cnpj' => $this->getCnpj (),
				'ie' => $this->getIe (),
				'razao_social' => $this->getRazaoSocial (),
				'cpf' => $this->getCpf (),
				'rg' => $this->getRg (),
				'celular' => $this->getCelular (),
				'telefone' => $this->getTelefone (),
				'email' => $this->getEmail (),
				'cep' => $this->getCep (),
				'skype' => $this->getSkype () 
		)
		;
	}
}




