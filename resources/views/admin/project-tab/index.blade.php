@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <spam><i class="material-icons md-36">folder_special</i> FICHAS DE LOS PROYECTOS</spam>
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="button-demo">
                                        <div class="col-lg-6 col-md-offset-0">
                                            <button type="button" class="btn btn-danger btn-xs waves-effect" disabled="disabled">({{ count($projecttab) }}) Proyectos Registrados</button>
                                        </div>
                                    </div>
                                    <div class="button-demo">
                                        <div class="col-lg-5 col-md-offset-1">
                                            <a href="{{ url('/admin/project-tab/create') }}" class="btn btn-info btn-xs btn-block waves-effect" title="Add New ProjectTab">Nuevo Proyecto <span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center"> Proyectos Recientes</h3>
                                    </div>
                                </div>
                                <div class="body">
                                    @foreach($projecttab as $item)
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>
                                                        {{ $item->name }}
                                                        <small>
                                                            <button type="button" class="btn btn-warning btn-xs waves-effect" disabled="disabled">(10) Fichas Adignadas al proyecto</button>
                                                        </small>
                                                    </h2>
                                                    <ul class="header-dropdown m-r-1">
                                                        <li>
                                                            <button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle">
                                                                <p>{{ $item->status }}</p>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="body">
                                                    <li>Consejo Comunal:</li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <td>
                                                        <a href="{{ url('/admin/project-tab/' . $item->id) }}" class="btn btn-success btn-xs" title="View ProjectTab"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                                        <a href="{{ url('/admin/project-tab/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit ProjectTab"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                                        {!! Form::open([
                                                            'method'=>'DELETE',
                                                            'url' => ['/admin/project-tab', $item->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete ProjectTab" />', array(
                                                                'type' => 'submit',
                                                                'class' => 'btn btn-danger btn-xs',
                                                                'title' => 'Delete ProjectTab',
                                                                'onclick'=>'return confirm("Confirm delete?")'
                                                        )) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                                        <div class="pagination-wrapper"> {!! $projecttab->render() !!} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
