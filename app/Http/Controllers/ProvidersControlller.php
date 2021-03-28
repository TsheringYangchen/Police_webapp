<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\providers;


class providersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('providers');

    }


    public function create()
    {
    }



    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'cid' => 'required',
            'Designation' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',

        ]);
        $providers = new providers([
            'name' => $request->get('name'),
            'cid' => $request->get('cid'),
            'Designation' => $request->get('Designation'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'confirm_password' => $request->get('confirm_password')
        ]);

        $providers->save();
        return redirect()->route('providers')->with('success','Data Added Successfully');
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
