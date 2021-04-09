<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bin;

class BinController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form

        $request->validate([
            'lno' => 'required',
            'lda' => 'required',
            'lna' => 'required',
            'cno' => 'required|max:11',
            'ena' => 'required',
            'lp' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        // Upload the image
        if ($request->hasFile('image')) {
        $image = $request->image;
        $image->move('uploads', $image->getClientOriginalName());
        }
        //Save the products
       Bin::create([
            'lno' => $request->lna,
            'lda' => $request->lda,
            'lna' => $request->lna,
            'cno' => $request->cno,
            'ena' => $request->ena,
            'lp' => $request->lp,
            'image' => $request->image->getClientOriginalName()
            
        ]);

        return back()->with('success', 'BIN Submitted Successfully');
    }
}