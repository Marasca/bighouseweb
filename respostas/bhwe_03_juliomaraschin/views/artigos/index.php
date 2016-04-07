<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Criado em</th>
      <th>Ação</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($artigos as $artigo) { ?>
    <tr>
      <td><?=$artigo['id']?></td>
      <td><?=$artigo['titulo']?></td>
      <td><?=date('d/m/Y \à\s H:i\h', strtotime($artigo['criado_em']))?></td>
      <td width="1" nowrap>
      	<a class="btn btn-default btn-sm" href="index.php?c=artigos&a=ver&id=<?=$artigo['id']?>">Ver</a>
      	<a class="btn btn-default btn-sm" href="index.php?c=artigos&a=editar&id=<?=$artigo['id']?>">Editar</a>
      	<a class="btn btn-default btn-sm" href="index.php?c=artigos&a=excluir&id=<?=$artigo['id']?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
