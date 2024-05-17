
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombreAUT') }}</label>
    <div>
        {{ Form::text('nombreAUT', $autore->nombreAUT, ['class' => 'form-control' .
        ($errors->has('nombreAUT') ? ' is-invalid' : ''), 'placeholder' => 'Nombreaut']) }}
        {!! $errors->first('nombreAUT', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">autore <b>nombreAUT</b> instruction.</small>
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
