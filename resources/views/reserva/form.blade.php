
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estudiante_id') }}</label>
    <div>
        {{ Form::text('estudiante_id', $reserva->estudiante_id, ['class' => 'form-control' .
        ($errors->has('estudiante_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Id']) }}
        {!! $errors->first('estudiante_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>estudiante_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('copia_id') }}</label>
    <div>
        {{ Form::text('copia_id', $reserva->copia_id, ['class' => 'form-control' .
        ($errors->has('copia_id') ? ' is-invalid' : ''), 'placeholder' => 'Copia Id']) }}
        {!! $errors->first('copia_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>copia_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaRES') }}</label>
    <div>
        {{ Form::text('fechaRES', $reserva->fechaRES, ['class' => 'form-control' .
        ($errors->has('fechaRES') ? ' is-invalid' : ''), 'placeholder' => 'Fechares']) }}
        {!! $errors->first('fechaRES', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>fechaRES</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('canceladaRES') }}</label>
    <div>
        {{ Form::text('canceladaRES', $reserva->canceladaRES, ['class' => 'form-control' .
        ($errors->has('canceladaRES') ? ' is-invalid' : ''), 'placeholder' => 'Canceladares']) }}
        {!! $errors->first('canceladaRES', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>canceladaRES</b> instruction.</small>
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
