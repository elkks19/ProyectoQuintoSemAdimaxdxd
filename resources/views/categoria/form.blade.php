
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombreCAT') }}</label>
    <div>
        {{ Form::text('nombreCAT', $categoria->nombreCAT, ['class' => 'form-control' .
        ($errors->has('nombreCAT') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecat']) }}
        {!! $errors->first('nombreCAT', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">categoria <b>nombreCAT</b> instruction.</small>
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
