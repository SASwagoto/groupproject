<?php

namespace App\Http\Controllers;
use App\Models\Lawer;
use App\Models\Category;
use Illuminate\Http\Request;

class LawerController extends Controller
{
    public function addlawer()
    {
     
        $categories = Category::all();
        return view('lawer.addlawer', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'lfirm'=>'required',
            'lname'=>'required',
            'laddress'=>'required',
            'lnumber'=>'required',
            'lemail'=>'required',
            'ldetails'=>'required',
            'llanguage'=>'required',
            'lcategory'=>'required',


     
        ]);
        Lawer::create([
            'lfirm'=>$request->lfirm,
            'lname'=>$request->lname,
            'laddress'=>$request->laddress,
            'lnumber'=>$request->lnumber,
            'lemail'=>$request->lemail,
            'ldetails'=>$request->ldetails,
            'llanguage'=>$request->llanguage,
            'lcategory'=>$request->lcategory,
             
        ]);
        return redirect()->route('addlawer');
    }
}

