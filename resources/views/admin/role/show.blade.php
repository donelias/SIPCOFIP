@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Role {{ $role->id }}</div>
                                <div class="panel-body">

                                    <a href="{{ url('admin/role/' . $role->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['admin/role', $role->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete Role',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        ))!!}
                                    {!! Form::close() !!}
                                    <br/>
                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>ID</th><td>{{ $role->id }}</td>
                                                </tr>
                                                <tr><th> Role </th><td> {{ $role->role }} </td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="{{ url('admin/role') }}"><spam class="btn btn-info btn-block">Regresar</spam></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection