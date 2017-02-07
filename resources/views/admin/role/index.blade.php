@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><spam>Roles del Usuario</spam></h4></div>
                                <div class="panel-body">

                                    <a href="{{ url('/admin/role/create') }}" class="btn btn-primary btn-xs" title="Add New Role"> Agregar Nuevo Role <span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                                    <br/>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th> Role </th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($role as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->role }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/role/' . $item->id) }}" class="btn btn-success btn-xs" title="View Role"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                                        <a href="{{ url('/admin/role/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                                        {!! Form::open([
                                                            'method'=>'DELETE',
                                                            'url' => ['/admin/role', $item->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Role" />', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-xs',
                                                                    'title' => 'Delete Role',
                                                                    'onclick'=>'return confirm("Confirm delete?")'
                                                            )) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pagination-wrapper"> {!! $role->render() !!} </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection