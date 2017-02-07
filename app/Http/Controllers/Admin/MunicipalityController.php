<?php

namespace SIPCOFIP\Http\Controllers\Admin;

use SIPCOFIP\Http\Requests;
use SIPCOFIP\Http\Controllers\Controller;

use SIPCOFIP\Municipality;
use Illuminate\Http\Request;
use Session;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $municipality = Municipality::paginate(25);

        return view('admin.municipality.index', compact('municipality'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.municipality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Municipality::create($requestData);

        Session::flash('flash_message', 'Municipality added!');

        return redirect('admin/municipality');
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
        $municipality = Municipality::findOrFail($id);

        return view('admin.municipality.show', compact('municipality'));
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
        $municipality = Municipality::findOrFail($id);

        return view('admin.municipality.edit', compact('municipality'));
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
        
        $municipality = Municipality::findOrFail($id);
        $municipality->update($requestData);

        Session::flash('flash_message', 'Municipality updated!');

        return redirect('admin/municipality');
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
        Municipality::destroy($id);

        Session::flash('flash_message', 'Municipality deleted!');

        return redirect('admin/municipality');
    }
}
