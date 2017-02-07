@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Municipality</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/municipality/create') }}" class="btn btn-primary btn-xs" title="Add New Municipality"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Municipality </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($municipality as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->municipality }}</td>
                                        <td>
                                            <a href="{{ url('/admin/municipality/' . $item->id) }}" class="btn btn-success btn-xs" title="View Municipality"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/municipality/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Municipality"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/municipality', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Municipality" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Municipality',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $municipality->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection