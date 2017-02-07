<?php

namespace SIPCOFIP\Http\Controllers\Admin;

use SIPCOFIP\Http\Requests\ProjectTabAddRequest;
use SIPCOFIP\Http\Controllers\Controller;
use SIPCOFIP\CommunityCouncil;
use SIPCOFIP\Entities\ProjectTab;
use Illuminate\Http\Request;
use Session;

class ProjectTabController extends Controller
{
   
    public function getMunicipality(Request $request, $id)
    {
        if ($request->ajax()) 
        {
            $municipalities = Municipality::municipality($id);
            return response()->json($municipalities); 
            # code...
        }
        # code...
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projecttab = ProjectTab::orderBy('id', 'DESC')->paginate(25);

        return view('admin.project-tab.index', compact('projecttab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $communitycouncil = CommunityCouncil::pluck('name', 'id')->all();
        return view('admin.project-tab.create', compact('communitycouncil'));
    }




    //generar codigo aleatorio
    private function generarCodigos($cantidad=3, $longitud=10, $incluyeNum=true){
        $caracteres = "1234567890";
        if($incluyeNum)
            $caracteres .= "1234567890";

        $arrPassResult=array();
        $index=0;
        while($index<$cantidad){
            $tmp="";
            for($i=0;$i<$longitud;$i++){
                $tmp.=$caracteres[rand(0,strlen($caracteres)-1)];
            }
            if(!in_array($tmp, $arrPassResult)){
                $arrPassResult[]=$tmp;
                $index++;
            }
        }
        return $arrPassResult;
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProjectTabAddRequest $request)
    {

        $codigos=$this->generarCodigos(1,8);
        foreach ($codigos as $codigo){
             $codigo;
    }

        $data = [
            'no_tab'        => $codigo,
            'name'          => $request->get('name'),
            'system_id'     => '0',
            'runner_id'     => '0',
            'community_council_id' => $request->get('communitycouncil'),
            'user_id' => \Auth::user()->id,
            'status'  => 'sent'
        ];

        ProjectTab::create($data);

        Session::flash('flash_message', 'ProjectTab added!');

        return redirect('admin/project-tab');


        //dd($data);


        /*$requestData = $request->all();
        
        ProjectTab::create($requestData);

        Session::flash('flash_message', 'ProjectTab added!');

        return redirect('admin/project-tab');*/
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
        $projecttab = ProjectTab::findOrFail($id);

        return view('admin.project-tab.show', compact('projecttab'));
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
        $projecttab = ProjectTab::findOrFail($id);

        return view('admin.project-tab.edit', compact('projecttab'));
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
        
        $projecttab = ProjectTab::findOrFail($id);
        $projecttab->update($requestData);

        Session::flash('flash_message', 'ProjectTab updated!');

        return redirect('admin/project-tab');
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
        ProjectTab::destroy($id);

        Session::flash('flash_message', 'ProjectTab deleted!');

        return redirect('admin/project-tab');
    }
}
