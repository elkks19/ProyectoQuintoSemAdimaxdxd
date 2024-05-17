
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_de_documento_id') }}</label>
    <div>
        {{ Form::text('tipo_de_documento_id', $copia->tipo_de_documento_id, ['class' => 'form-control' .
        ($errors->has('tipo_de_documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Documento Id']) }}
        {!! $errors->first('tipo_de_documento_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">copia <b>tipo_de_documento_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('documento_id') }}</label>
    <div>
        {{ Form::text('documento_id', $copia->documento_id, ['class' => 'form-control' .
        ($errors->has('documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Documento Id']) }}
        {!! $errors->first('documento_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">copia <b>documento_id</b> instruction.</small>
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
