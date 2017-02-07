@extends('admin.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ProjectTab {{ $projecttab->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/project-tab/' . $projecttab->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit ProjectTab"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/projecttab', $projecttab->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ProjectTab',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $projecttab->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $projecttab->name }} </td></tr><tr><th> System Id </th><td> {{ $projecttab->system_id }} </td></tr><tr><th> Runner Id </th><td> {{ $projecttab->runner_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection