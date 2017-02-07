<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    {!! Form::label('role', 'Role', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="form-line">
            {!! Form::text('role', null, ['class' => 'form-control']) !!}
            {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<hr>
<div class="form-group">
    <div class="col-md-offset-2 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Crear', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
    <div class="col-md-offset-0 col-md-4">
        <a href="{{ url('admin/role') }}"><spam class="btn btn-danger btn-block">Cancelar</spam></a>
    </div>
</div>