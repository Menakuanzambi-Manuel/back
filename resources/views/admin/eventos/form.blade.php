<div class="row">
    <div class="form-group col-6">
        <label class="col-form-label">nome</label>
        <div>
            <input type="text" name="nome" value="{{@$eventos->nome}}" id="">
        </div>
    </div>
    
    <div class="form-group col-6">
        <label class="col-form-label">descrição</label>
        <div>
            <input type="text" name="descricao" value="{{@$eventos->descricao}}" id="">
        </div>
    </div>

    <div class="form-group col-6">
        <label class="col-form-label">imagem</label>
        <div>
            <input type="file" name="imagem" value="{{@$eventos->imagem}}" id="">
        </div>
    </div>
    <div class="seperator"></div>
    
    
    <div class="col-12">
        <a href="/" class="btn-secondry add-item m-r5">voltar</a>
        <button type="submit" class="btn">Salvar</button>
    </div>
</div>