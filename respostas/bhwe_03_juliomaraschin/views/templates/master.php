<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BigHouseWeb - Exercício 3</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    	<?php
        if (isset($_GET['status'])) {
			$class = isset($_GET['statusClass']) && !empty($_GET['statusClass']) ? $_GET['statusClass'] : 'success';
			echo '<div class="alert alert-'.$class.'" style="margin-top: 15px">'.urldecode($_GET['status']).'</div>';
		}
		?>
        
        <h1 class="text-center">BigHouseWeb - Exercício 3</h1>
        
        <nav class="text-center">
        	<a class="btn btn-default" href="index.php?c=artigos&a=index">Artigos</a>
        	<a class="btn btn-default" href="index.php?c=imagens&a=index">Imagens</a>
        	<a class="btn btn-default" href="index.php?c=anexos&a=index">Anexos</a>
        	<a class="btn btn-primary" href="index.php?c=artigos&a=inserir">Inserir artigo</a>
        	<a class="btn btn-primary" href="index.php?c=imagens&a=inserir">Inserir imagem</a>
        	<a class="btn btn-primary" href="index.php?c=anexos&a=inserir">Inserir anexo</a>
        </nav>
        
        <br>
        
        [VIEW]
    </div>
</body>
</html>