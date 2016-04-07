<?php
$controller = (isset($_GET['c']) ? $_GET['c'] : 'artigos').'Controller';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

require 'config.php';

// Importa os models
require 'models/baseModel.php';
require 'models/artigo.php';
require 'models/imagem.php';
require 'models/anexo.php';

// Carrega o controller
require 'controllers/baseController.php';
require 'controllers/'.$controller.'.php';

// Inicia a aplicação
$app = new $controller();
$app->$action();
?>