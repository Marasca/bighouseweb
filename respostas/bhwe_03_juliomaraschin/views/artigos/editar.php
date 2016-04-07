<h3>Editando artigo</h3>

<form action="index.php?c=artigos&a=salvar" method="post">
	<input type="hidden" name="id" value="<?=$artigo['id']?>">
    
    <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" value="<?=$artigo['titulo']?>">
    </div>
    
    <div class="form-group">
        <label>Texto</label>
        <textarea name="texto" class="form-control"><?=$artigo['texto']?></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Salvar</button>
</form>