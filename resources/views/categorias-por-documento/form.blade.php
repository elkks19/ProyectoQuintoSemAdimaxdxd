
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('categoria_id') }}</label>
    <div>
        {{ Form::text('categoria_id', $categoriasPorDocumento->categoria_id, ['class' => 'form-control' .
        ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
        {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">categoriasPorDocumento <b>categoria_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('documento_id') }}</label>
    <div>
        {{ Form::text('documento_id', $categoriasPorDocumento->documento_id, ['class' => 'form-control' .
        ($errors->has('documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Documento Id']) }}
        {!! $errors->first('documento_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">categoriasPorDocumento <b>documento_id</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
