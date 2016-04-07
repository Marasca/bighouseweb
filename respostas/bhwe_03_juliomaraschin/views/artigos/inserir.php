<h3>Inserir artigo</h3>

<form action="index.php?c=artigos&a=salvar" method="post">
    <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" value="">
    </div>
    
    <div class="form-group">
        <label>Texto</label>
        <textarea name="texto" class="form-control"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Enviar</button>
</form>