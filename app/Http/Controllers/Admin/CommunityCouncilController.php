<?php

namespace SIPCOFIP\Http\Controllers\Admin;

use SIPCOFIP\Http\Requests;
use SIPCOFIP\Http\Controllers\Controller;

use SIPCOFIP\CommunityCouncil;
use SIPCOFIP\Person;
use Illuminate\Http\Request;
use SIPCOFIP\Http\Requests\CommunityCouncilAddRequest;
use Session;

class CommunityCouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $communitycouncil = CommunityCouncil::paginate(25);

        return view('admin.community-council.index', compact('communitycouncil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
       //dd($request);

        $sector_id = $request;
        return view('admin.community-council.create', compact('sector_id') );
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CommunityCouncilAddRequest $request)
    {


        echo $person_id = $person = $this->addPerson($request);

        //dd($request);
        $data = [
            'rif'           => $request->get('rif'),
            'name'          => $request->get('name'),
            'people_id'     => $person_id,
            'sector_id'     => $request->get('sector_id')
        ];

        CommunityCouncil::create($data);

        Session::flash('flash_message', 'CommunityCouncil added!');

        return redirect('admin/community-council');




        /*$requestData = $request->all();
        
        CommunityCouncil::create($requestData);

        Session::flash('flash_message', 'CommunityCouncil added!');

        return redirect('admin/community-council');*/
    }

    private function addPerson(Request $request)
    {
        $identity = $request->identity;
        $consult = Person::where('identity', $identity)->pluck('id', 'identity')->all();
        if ($consult == null){

            //echo "no hay registro en la db";
            $data = [
                'identity'          => $request->get('identity'),
                'name'              => $request->get('first_name'),
                'last_name'         => $request->get('last_name'),
                'birth_date'        => '2017-02-05',
                'address'           => 'Address',
                'telephone'         => '+580000000000',
                'project_tab_id'    => '1',
            ];
            $person = Person::create($data);

             $person_id = $person->id;

           //echo $person_id = Person::where('identity', $identity)->pluck('id', 'identity')->all();


        }else{

            //echo "si hay registro";
            foreach ($consult as $person_id) {
                $person_id;
            }


        }

        return $person_id;
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $communitycouncil = CommunityCouncil::findOrFail($id);

        return view('admin.community-council.show', compact('communitycouncil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $communitycouncil = CommunityCouncil::findOrFail($id);

        return view('admin.community-council.edit', compact('communitycouncil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $communitycouncil = CommunityCouncil::findOrFail($id);
        $communitycouncil->update($requestData);

        Session::flash('flash_message', 'CommunityCouncil updated!');

        return redirect('admin/community-council');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        CommunityCouncil::destroy($id);

        Session::flash('flash_message', 'CommunityCouncil deleted!');

        return redirect('admin/community-council');
    }
}
