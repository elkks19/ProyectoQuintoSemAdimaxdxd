
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('encargado_id') }}</label>
    <div>
        {{ Form::text('encargado_id', $prestamo->encargado_id, ['class' => 'form-control' .
        ($errors->has('encargado_id') ? ' is-invalid' : ''), 'placeholder' => 'Encargado Id']) }}
        {!! $errors->first('encargado_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>encargado_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('reserva_id') }}</label>
    <div>
        {{ Form::text('reserva_id', $prestamo->reserva_id, ['class' => 'form-control' .
        ($errors->has('reserva_id') ? ' is-invalid' : ''), 'placeholder' => 'Reserva Id']) }}
        {!! $errors->first('reserva_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>reserva_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaPrestamoPRE') }}</label>
    <div>
        {{ Form::text('fechaPrestamoPRE', $prestamo->fechaPrestamoPRE, ['class' => 'form-control' .
        ($errors->has('fechaPrestamoPRE') ? ' is-invalid' : ''), 'placeholder' => 'Fechaprestamopre']) }}
        {!! $errors->first('fechaPrestamoPRE', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>fechaPrestamoPRE</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaDevolucionPRE') }}</label>
    <div>
        {{ Form::text('fechaDevolucionPRE', $prestamo->fechaDevolucionPRE, ['class' => 'form-control' .
        ($errors->has('fechaDevolucionPRE') ? ' is-invalid' : ''), 'placeholder' => 'Fechadevolucionpre']) }}
        {!! $errors->first('fechaDevolucionPRE', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>fechaDevolucionPRE</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaLimitePRE') }}</label>
    <div>
        {{ Form::text('fechaLimitePRE', $prestamo->fechaLimitePRE, ['class' => 'form-control' .
        ($errors->has('fechaLimitePRE') ? ' is-invalid' : ''), 'placeholder' => 'Fechalimitepre']) }}
        {!! $errors->first('fechaLimitePRE', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">prestamo <b>fechaLimitePRE</b> instruction.</small>
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
