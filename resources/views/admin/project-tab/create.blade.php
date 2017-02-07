@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Crear Nueva ficha del Proyecto</h4> </div>
                                <div class="panel-body">

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    {!! Form::open(['url' => '/admin/project-tab', 'class' => 'form-horizontal', 'files' => true]) !!}

                                    @include ('admin.project-tab.form')

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