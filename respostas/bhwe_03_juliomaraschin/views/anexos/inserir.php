<h3>Inserir anexo</h3>

<form action="index.php?c=anexos&a=salvar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="">
    </div>
    
    <div class="form-group">
        <label>Anexo</label>
        <input type="file" name="anexo">
        <p class="help-block">Somente arquivos do tipo ZIP, RAR, DOC, DOCX, PDF e TXT são permitidos.</p>
    </div>
    
    <button type="submit" class="btn btn-default">Enviar</button>
</form>