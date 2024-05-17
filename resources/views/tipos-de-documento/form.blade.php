
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombreTID') }}</label>
    <div>
        {{ Form::text('nombreTID', $tiposDeDocumento->nombreTID, ['class' => 'form-control' .
        ($errors->has('nombreTID') ? ' is-invalid' : ''), 'placeholder' => 'Nombretid']) }}
        {!! $errors->first('nombreTID', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposDeDocumento <b>nombreTID</b> instruction.</small>
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
