<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;

class CatagoryController extends Controller
{
    public function index(){
        $catagories= catagory::all();
        return view('catagories.list',['catagories'=>$catagories]);
    }


    public function create(){
        return view('catagories.new');
    }


    public function store(Request $request){
        // dd($request->title);

        $catagory= new Catagory;
        $catagory->title = $request->title;
        $catagory->save();

        return redirect('/');
    }

    public function update($id){
        // dd($id);
        // echo $id;
        $catagory = Catagory::where('id',$id)->first();

        return view('catagories.update',['catagory'=>$catagory]);
    }

    public function edit(Request $request,$id){
        $catagory= Catagory::where('id',$id)->first();
        $catagory->title= $request->title;

        $catagory->save();

        return redirect('/');
    }
}
