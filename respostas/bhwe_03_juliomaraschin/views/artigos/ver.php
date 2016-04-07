<div class="panel panel-default">
    <div class="panel-heading">Detalhes do artigo</div>
    <div class="panel-body">
    	<strong>Título:</strong> <?=$artigo['titulo']?><br>
        <strong>Texto:</strong><br>
        <?=nl2br($artigo['texto'])?><br>
    	<strong>Criado em:</strong> <?=date('d/m/Y \à\s H:i\h', strtotime($artigo['criado_em']))?>
    </div>
</div>