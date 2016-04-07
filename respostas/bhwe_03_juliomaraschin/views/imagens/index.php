<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Imagem</th>
      <th>Criado em</th>
      <th>Ação</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($imagens as $imagem) { ?>
    <tr>
      <td><?=$imagem['id']?></td>
      <td><?=$imagem['nome']?></td>
      <td><img src="uploads/<?=$imagem['imagem']?>" width="80"></td>
      <td><?=date('d/m/Y \à\s H:i\h', strtotime($imagem['criado_em']))?></td>
      <td width="1" nowrap>
      	<a class="btn btn-default btn-sm" href="index.php?c=imagens&a=excluir&id=<?=$imagem['id']?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
