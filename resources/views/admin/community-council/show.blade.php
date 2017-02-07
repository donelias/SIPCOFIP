@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">Consejo Comunal {{ $communitycouncil->rif }}</div>
                                <div class="panel-body">

                                    <a href="{{ url('admin/community-council/' . $communitycouncil->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit CommunityCouncil"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/> Editar</a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['admin/communitycouncil', $communitycouncil->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/> Eliminar', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete CommunityCouncil',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        ))!!}
                                    {!! Form::close() !!}
                                    <br/>
                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr><th> Rif </th><td> {{ $communitycouncil->rif }} </td></tr>
                                                <tr><th> Nomre Consejo Comunal </th><td> {{ $communitycouncil->name }} </td></tr>
                                                <tr><th> Ubicacion </th><td> {{ $communitycouncil->sector->sector }} </td></tr>
                                                <tr><th> Coordinador </th><td>  </td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-offset-1 col-md-8">
                                        <a href="{{ url('admin/community-council') }}" class="btn btn-info btn-block btn-xs"><i class="material-icons">arrow_back</i> Regresar</a>
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