@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        @include('flash::message')
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><spam>Consejos Comunales</spam></h4></div>
                                <div class="panel-body">

                                    <a href="{{ url('/admin/community-council/create') }}" class="btn btn-primary btn-xs" title="Add New CommunityCouncil"> Agregar Nuevo Consejo Comunal <span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                                    <br/>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>ID</th><th> Rif </th><th> Nombre </th><th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($communitycouncil as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->rif }}</td><td>{{ $item->name }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/community-council/' . $item->id) }}" class="btn btn-success btn-xs" title="View CommunityCouncil"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                                        <a href="{{ url('/admin/community-council/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit CommunityCouncil"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                                        {!! Form::open([
                                                            'method'=>'DELETE',
                                                            'url' => ['/admin/community-council', $item->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete CommunityCouncil" />', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-xs',
                                                                    'title' => 'Delete CommunityCouncil',
                                                                    'onclick'=>'return confirm("Confirm delete?")'
                                                            )) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pagination-wrapper"> {!! $communitycouncil->render() !!} </div>
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