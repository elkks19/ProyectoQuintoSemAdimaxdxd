
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estudiante_id') }}</label>
    <div>
        {{ Form::text('estudiante_id', $descarga->estudiante_id, ['class' => 'form-control' .
        ($errors->has('estudiante_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Id']) }}
        {!! $errors->first('estudiante_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">descarga <b>estudiante_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('copia_id') }}</label>
    <div>
        {{ Form::text('copia_id', $descarga->copia_id, ['class' => 'form-control' .
        ($errors->has('copia_id') ? ' is-invalid' : ''), 'placeholder' => 'Copia Id']) }}
        {!! $errors->first('copia_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">descarga <b>copia_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaDES') }}</label>
    <div>
        {{ Form::text('fechaDES', $descarga->fechaDES, ['class' => 'form-control' .
        ($errors->has('fechaDES') ? ' is-invalid' : ''), 'placeholder' => 'Fechades']) }}
        {!! $errors->first('fechaDES', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">descarga <b>fechaDES</b> instruction.</small>
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
