<h3>Inserir imagem</h3>

<form action="index.php?c=imagens&a=salvar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="">
    </div>
    
    <div class="form-group">
        <label>Imagem</label>
        <input type="file" name="imagem">
        <p class="help-block">Somente imagens do tipo JPG, GIF e PNG são permitidos.</p>
    </div>
    
    <button type="submit" class="btn btn-default">Enviar</button>
</form>