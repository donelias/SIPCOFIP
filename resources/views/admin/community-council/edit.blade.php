@extends('layouts.app_admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">Edit CommunityCouncil {{ $communitycouncil->id }}</div>
                                <div class="panel-body">

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    {!! Form::model($communitycouncil, [
                                        'method' => 'PATCH',
                                        'url' => ['/admin/community-council', $communitycouncil->id],
                                        'class' => 'form-horizontal',
                                        'files' => true
                                    ]) !!}

                                    @include ('admin.community-council.form', ['submitButtonText' => 'Editar'])

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