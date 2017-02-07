@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><spam>Crear Nuevo Consejo Comunal</spam></h4></div>
                                <div class="panel-body">

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                        <div>
                                            <header>Datos de Ubicacion</header>
                                            <br>
                                            @include('admin.partials.dropdowns')
                                        </div>
                                    {!! Form::open(['url' => '/admin/community-council', 'class' => 'form-horizontal', 'files' => true]) !!}

                                    @include ('admin.community-council.form')
                                        {!! Form::hidden('sector_id', $sector_id->sector_id) !!}

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
