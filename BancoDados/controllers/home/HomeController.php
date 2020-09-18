<?php

/**
*
* Controller do formulario do cadastro.
*
* @author Code Universe
*
**/
class HomeController extends Controller
{
	
	// função para o cadastro de formulario
	public function submitCadastro(){

		$id = null;
		$name = $_POST['name'];
		$content = $_POST['content'];
		$descricao = $_POST['descricao'];

		$saveCadastro = new HomeCrud;
		$saveCadastro = $saveCadastro->saveCadastro($id, $name, $content, $descricao);

		echo json_encode(array(
			'result' => $saveCadastro,
		));
	}
}