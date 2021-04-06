<?php

namespace App\Http\Controllers\Front;

use App\User;
use Redirect;
use App\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class RegistrationController extends Controller
{

    public function index()
    {
        return view('front.registration.index');
    }

    public function license(Request $request){
    
        $request->validate([
            'LHname' => 'required',
            'license' => 'required|max:9',
        ]);
        // Save the data
        $user = License::create([
            'LHname' => $request->LHname,
            'license' => $request->license,
        ]);

        // Sign the user in
        $request->session()->flash('msg', 'License Holders has been added successfully');

        // Redirect to
        return redirect('/admin/products/create');
    }

    public function store(Request $request)
    {

        // Validate the user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Save the data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Sign the user in
        auth()->login($user);

        $request->session()->flash('msg', 'Your user has been added');

        // Redirect to
        return redirect('/admin/products/create');
    }
    public function viewLicense(){
       
        //Before Applying pagination
             //$license=License::all();
        // After applying pagination
        $license=License::paginate(3);     
        return view('admin.products.viewLicense',['licenses'=>$license]);
    }
   
    public function editLicense(Request $request, $id)
    {
        $licenses = License::findOrFail($id);
        return view('admin.products.license-edit')->with('licenses',$licenses);
    }
    public function updateLicense(Request $request, $id)
    {
        $licenses = License::find($id);
        $licenses->LHname=$request->input('LHname');
        $licenses->update();
        return redirect('/admin/viewLicense')->with('success','You have successfully updated the details of License Holder');
    }

    public function  deleteLicense($id){
        $licenses = License::findOrFail($id);  
        $licenses->delete();
        session()->flash('msg','You have successfully deleted the License Holder');
        return redirect('/admin/viewLicense');
    }

    public function Holder(Request $request){

        $request -> validate([
            
            'no'=>'required'
        ]);
        
       

    if ($holder = License::where('license','=', Input::get('no'))->first())
    {
        return redirect::route('status');
    }
    
    else
    {
         // Session message
        return back()->with('msg','Wrong license Number');
    }
    }
    
}
