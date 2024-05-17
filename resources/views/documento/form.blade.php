
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombreDOC') }}</label>
    <div>
        {{ Form::text('nombreDOC', $documento->nombreDOC, ['class' => 'form-control' .
        ($errors->has('nombreDOC') ? ' is-invalid' : ''), 'placeholder' => 'Nombredoc']) }}
        {!! $errors->first('nombreDOC', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">documento <b>nombreDOC</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaSubidaDOC') }}</label>
    <div>
        {{ Form::text('fechaSubidaDOC', $documento->fechaSubidaDOC, ['class' => 'form-control' .
        ($errors->has('fechaSubidaDOC') ? ' is-invalid' : ''), 'placeholder' => 'Fechasubidadoc']) }}
        {!! $errors->first('fechaSubidaDOC', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">documento <b>fechaSubidaDOC</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_de_documento_id') }}</label>
    <div>
        {{ Form::text('tipo_de_documento_id', $documento->tipo_de_documento_id, ['class' => 'form-control' .
        ($errors->has('tipo_de_documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Documento Id']) }}
        {!! $errors->first('tipo_de_documento_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">documento <b>tipo_de_documento_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('autor_id') }}</label>
    <div>
        {{ Form::text('autor_id', $documento->autor_id, ['class' => 'form-control' .
        ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => 'Autor Id']) }}
        {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">documento <b>autor_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('encargado_id') }}</label>
    <div>
        {{ Form::text('encargado_id', $documento->encargado_id, ['class' => 'form-control' .
        ($errors->has('encargado_id') ? ' is-invalid' : ''), 'placeholder' => 'Encargado Id']) }}
        {!! $errors->first('encargado_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">documento <b>encargado_id</b> instruction.</small>
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
