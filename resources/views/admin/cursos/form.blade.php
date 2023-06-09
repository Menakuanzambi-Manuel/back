<div class="row">
    <div class="form-group col-6">
        <label class="col-form-label">nome</label>
        <div>
            <input type="text" name="nome" value="{{@$cursos->nome}}" id="">
        </div>
    </div>
    
    <div class="form-group col-6">
        <label class="col-form-label">sigla</label>
        <div>
            <input type="text" name="sigla" value="{{@$cursos->sigla}}" id="">
        </div>
    </div>
    <div class="seperator"></div>
    
    
    <div class="col-12">
        <a href="/" class="btn-secondry add-item m-r5">voltar</a>
        <button type="submit" class="btn">Salvar</button>
    </div>
</div>