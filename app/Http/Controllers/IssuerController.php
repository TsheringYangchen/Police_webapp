<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Issuer;

class IssuerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.issuers.create');

    }


    public function issue(Request $request){
    
        $request->validate([
            'cid' => 'required|max:11',
            'Issuername' => 'required',
            'designation' => 'required',
            'Email' => 'required',
        ]);
        // Save the data
        $issuer = Issuer::create([
            'cid' => $request->get('cid'),
            'Issuername' => $request->get('Issuername'),
            'designation' => $request->get('designation'),
            'email' => $request->get('email'),
        ]);

          // Redirect to
          return redirect('/admin/issuers/create')->with('msg', 'BIN/EIN Providers has been created');
      }

      public function viewIssuer()
      {
          $issuer=Issuer::all();
          return view('admin.issuers.viewIssuer',['issuers'=>$issuer]);
      }

}
