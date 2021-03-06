@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sector</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/sector/create') }}" class="btn btn-primary btn-xs" title="Add New Sector"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Sector </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sector as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->sector }}</td>
                                        <td>
                                            <a href="{{ url('/admin/sector/' . $item->id) }}" class="btn btn-success btn-xs" title="View Sector"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/sector/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Sector"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/sector', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Sector" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Sector',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $sector->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection