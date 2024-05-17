
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('user') }}</label>
    <div>
        {{ Form::text('user', $estudiante->user, ['class' => 'form-control' .
        ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
        {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">estudiante <b>user</b> instruction.</small>
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
