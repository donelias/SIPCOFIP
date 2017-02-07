
<div class="input-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Nombre del Proyecto', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        <div class="form-line">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('system_id') ? 'has-error' : ''}}">
    {!! Form::label('system_id', 'System Id', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-2">
        <div class="form-line">
            {!! Form::text('system_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('system_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('runner_id') ? 'has-error' : ''}}">
        {!! Form::label('runner_id', 'Runner Id', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-2">
            <div class="form-line">
                {!! Form::number('runner_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('runner_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<div class="form-group {{ $errors->has('communitycouncil') ? 'has-error' : ''}}">
    {!! Form::label('communitycouncil', 'Consejo Comunal', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
        <div class="form-line">
            {!! Form::select('communitycouncil', $communitycouncil, null, ['id' => 'state'], ['class' => 'form-control']) !!}
            {!! $errors->first('communitycouncil', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<hr>
<div class="form-group">
    <div class="col-md-offset-1 col-md-5">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Aceptar', ['class' => 'btn btn-primary btn-block'], ['class' => 'glyphicon glyphicon-plus'] ) !!}
    </div>
    <div class="col-md-offset-0 col-md-5">
        <a href="{{url('/admin/project-tab')}}" class="btn btn-danger btn-block"><i class="material-icons">cancel</i> Cancelar</a>
    </div>
</div>