<?php

namespace SIPCOFIP\Http\Controllers\Admin;

use SIPCOFIP\Http\Requests;
use SIPCOFIP\Http\Controllers\Controller;

use SIPCOFIP\Person;
use Illuminate\Http\Request;
use Session;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $person = Person::paginate(25);

        return view('admin.person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.person.create');
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
        
        Person::create($requestData);

        Session::flash('flash_message', 'Person added!');

        return redirect('admin/person');
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
        $person = Person::findOrFail($id);

        return view('admin.person.show', compact('person'));
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
        $person = Person::findOrFail($id);

        return view('admin.person.edit', compact('person'));
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
        
        $person = Person::findOrFail($id);
        $person->update($requestData);

        Session::flash('flash_message', 'Person updated!');

        return redirect('admin/person');
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
        Person::destroy($id);

        Session::flash('flash_message', 'Person deleted!');

        return redirect('admin/person');
    }
}
