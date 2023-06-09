<div class="widget-inner">
    <div class="row">
        <div class="form-group col-12">
            <label class="col-form-label">Descricao do Anuncio</label>
            <div>
                <textarea name="descricao" id="descricao" cols="50" rows="10">{{@$anuncios->descricao}}</textarea>
            </div>
        </div>
        <div class="seperator"></div>    
        <div class="col-12">
            <a href="{{route('anuncios.index')}}" class="btn-secondry add-item m-r5">voltar</a>
            <button type="submit" class="btn">Salvar</button>
        </div>
    </div>
</div>
