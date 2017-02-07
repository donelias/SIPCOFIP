
    {!! Form::model($countryForm, ['method' => 'GET', 'class' => 'form', 'id' => 'search']) !!}
        {!! Form::select('state_id', $states) !!}
        {!! Form::select('municipality_id', $municipalities) !!}
        {!! Form::select('parish_id', $parish) !!}
        {!! Form::select('sector_id', SIPCOFIP\Sector::where('parish_id', $countryForm['parish_id'])
                    ->orderBy('sector', 'ASC')
                    ->pluck('sector', 'id')
                    ->all()) !!}
    {!! Form::close() !!}
