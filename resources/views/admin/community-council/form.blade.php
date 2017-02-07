
<hr>
<header>Datos Principales del Consejo Comunal</header>
<br>
<div class="form-group {{ $errors->has('rif') ? 'has-error' : ''}}">
    {!! Form::label('rif', 'Rif', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        <div class="form-line">
            {!! Form::number('rif', null, ['class' => 'form-control', 'required']) !!}
            {!! $errors->first('rif', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div><div class="form-group {{ $errors->has('name_proyect') ? 'has-error' : ''}}">
    {!! Form::label('name_proyect', 'Nombre', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        <div class="form-line">
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<hr>
    <header>Datos Del Coordinador</header>
    <br>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('identity') ? 'has-error' : ''}}">
            {!! Form::label('identity', 'Cedula', ['class' => 'col-md-3 control-label']) !!}
            <div class="col-md-8">
                <div class="form-line">
                {!! Form::text('identity', null, ['class' => 'form-control', 'required']) !!}
                {!! $errors->first('identity', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            {!! Form::label('first_name', 'Nombres', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8">
                <div class="form-line">
                {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
                {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
            {!! Form::label('last_name', 'Apellidos', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8">
                <div class="form-line">
                {!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
                {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
<hr>

<div class="form-group">
    <hr>
    <div class="col-md-offset-2 col-md-4">
         {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', [ 'class' => 'btn btn-primary btn-block']) !!}

    </div>
    <div class="col-md-offset-0 col-md-4">
        <a href="{{ url('admin/community-council') }}" class="btn btn-danger btn-block"><i class="material-icons">backspace</i> Cancelar</a>
    </div>
</div>