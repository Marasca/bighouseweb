<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Arquivo</th>
      <th>Criado em</th>
      <th>Ação</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($anexos as $anexo) { ?>
    <tr>
      <td><?=$anexo['id']?></td>
      <td><?=$anexo['nome']?></td>
      <td><a href="uploads/<?=$anexo['anexo']?>" target="_blank"><i class="glyphicon glyphicon-download" style="font-size: 24px"></i></a></td>
      <td><?=date('d/m/Y \à\s H:i\h', strtotime($anexo['criado_em']))?></td>
      <td width="1" nowrap>
      	<a class="btn btn-default btn-sm" href="index.php?c=anexos&a=excluir&id=<?=$anexo['id']?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
