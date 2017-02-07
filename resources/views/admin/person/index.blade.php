@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Person</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/person/create') }}" class="btn btn-primary btn-xs" title="Add New Person"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Identity </th><th> Name </th><th> Last Name </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($person as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->identity }}</td><td>{{ $item->name }}</td><td>{{ $item->last_name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/person/' . $item->id) }}" class="btn btn-success btn-xs" title="View Person"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/person/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Person"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/person', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Person" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Person',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $person->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection