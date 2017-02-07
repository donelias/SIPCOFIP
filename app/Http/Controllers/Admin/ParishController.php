<?php

namespace SIPCOFIP\Http\Controllers\Admin;

use SIPCOFIP\Http\Requests;
use SIPCOFIP\Http\Controllers\Controller;

use SIPCOFIP\Parish;
use Illuminate\Http\Request;
use Session;

class ParishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $parish = Parish::paginate(25);

        return view('admin.parish.index', compact('parish'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.parish.create');
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
        
        Parish::create($requestData);

        Session::flash('flash_message', 'Parish added!');

        return redirect('admin/parish');
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
        $parish = Parish::findOrFail($id);

        return view('admin.parish.show', compact('parish'));
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
        $parish = Parish::findOrFail($id);

        return view('admin.parish.edit', compact('parish'));
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
        
        $parish = Parish::findOrFail($id);
        $parish->update($requestData);

        Session::flash('flash_message', 'Parish updated!');

        return redirect('admin/parish');
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
        Parish::destroy($id);

        Session::flash('flash_message', 'Parish deleted!');

        return redirect('admin/parish');
    }
}
