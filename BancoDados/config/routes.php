<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Code Universe
*
**/

// rotas normais
$commonRoutes = array(
	'/'               => 'SiteController/index',
);

// rotas POST
$commonPost = array(
	'submitCadastro'		=> 'HomeController/submitCadastro',
);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;