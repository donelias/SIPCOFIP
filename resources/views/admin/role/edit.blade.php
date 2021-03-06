@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Editar Role No. {{ $role->id }}</div>
                                <div class="panel-body">

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    {!! Form::model($role, [
                                        'method' => 'PATCH',
                                        'url' => ['/admin/role', $role->id],
                                        'class' => 'form-horizontal',
                                        'files' => true
                                    ]) !!}

                                    @include ('admin.role.form', ['submitButtonText' => 'Editar'])

                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection