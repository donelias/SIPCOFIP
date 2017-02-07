<?php

namespace SIPCOFIP\Http\Controllers\Admin;

use SIPCOFIP\Http\Requests;
use SIPCOFIP\Http\Controllers\Controller;

use SIPCOFIP\State;
use Illuminate\Http\Request;
use Session;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $state = State::paginate(25);

        return view('admin.state.index', compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.state.create');
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
        
        State::create($requestData);

        Session::flash('flash_message', 'State added!');

        return redirect('admin/state');
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
        $state = State::findOrFail($id);

        return view('admin.state.show', compact('state'));
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
        $state = State::findOrFail($id);

        return view('admin.state.edit', compact('state'));
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
        
        $state = State::findOrFail($id);
        $state->update($requestData);

        Session::flash('flash_message', 'State updated!');

        return redirect('admin/state');
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
        State::destroy($id);

        Session::flash('flash_message', 'State deleted!');

        return redirect('admin/state');
    }
}
