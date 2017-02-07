<?php
namespace SIPCOFIP\Http\ViewComposers;

use SIPCOFIP\Country;
use SIPCOFIP\State;
use SIPCOFIP\Municipality;
use SIPCOFIP\Parish;
use SIPCOFIP\Sector;


use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class MakeModelForm
{
    public function compose(View $view)
    {
        $countryForm = Request::only('country_id', 'state_id', 'municipality_id', 'parish_id');

        $states = State::orderBy('state', 'ASC')
            ->pluck('state', 'id')
            ->all();
        $parish = $municipalities = array();

        if ($countryForm['state_id'] != null) {
            $municipalities = Municipality::where('state_id', $countryForm['state_id'])
                ->orderBy('municipality', 'ASC')
                ->pluck('municipality', 'id')
                ->all();

            if ($countryForm['municipality_id'] != null) {
                $parish = Parish::where('municipality_id', $countryForm['municipality_id'])
                    ->orderBy('parish', 'ASC')
                    ->pluck('parish', 'id')
                    ->all();
            }
            /* if ($countryForm['parish_id'] != null) {
                $sector = Sector::where('parish_id', $countryForm['parish_id'])
                    ->orderBy('sector', 'ASC')
                    ->pluck('sector', 'id')
                    ->all();
            }*/

        }

        $view->with(compact('countryForm', 'states', 'parish',  'municipalities', 'sector' ));
    }


}