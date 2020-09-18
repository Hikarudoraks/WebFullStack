<?php

/**
*
* Classe que configura o crud do contato
*
* @author Code Universe
*
**/
class HomeCrud
{
	private $pdoCrud;
	private $table = 'home';

	public function __construct()
	{
		$this->pdoCrud = new PDOCrud;
	}

	public function saveCadastro($id=null, $name, $content, $descricao)
	{
		$pdo = array(
			':name'		=> $name,
			':content'	=> $content,
			':descricao'	=> $descricao,
		);

		$columns = 'name, content, descricao';
		$values = ':name, :content, :descricao';

		return $this->pdoCrud->insert($this->table, $columns, $values, $pdo);
	}
}