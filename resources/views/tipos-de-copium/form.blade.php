
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombreTIC') }}</label>
    <div>
        {{ Form::text('nombreTIC', $tiposDeCopium->nombreTIC, ['class' => 'form-control' .
        ($errors->has('nombreTIC') ? ' is-invalid' : ''), 'placeholder' => 'Nombretic']) }}
        {!! $errors->first('nombreTIC', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposDeCopium <b>nombreTIC</b> instruction.</small>
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
