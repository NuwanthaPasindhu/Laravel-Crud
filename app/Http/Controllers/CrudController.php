<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
   public function index(){
      $data =  Crud::latest()->get();

         return view('pages.index')->with(compact('data'));
   }
   public function store(Request $request){
       $error =  $request->validate([
            'name' => 'required',
            'email' => 'required|email'

        ]);
        Crud::create($request->all());

    // dd($request);
    return redirect()->back()->with('msg','Success');
   }
   public function update($id){
     $data = Crud::find($id);
     return view('pages.data')->with(compact('data'));

   }
   public function updatedata(Request $request){
        $id  =$request->id;
            Crud::find($id)->update($request->all());

    return redirect()->route('index')->with('msg','Updated');
   }
   public function delete($id){
       Crud::find($id)->delete();
        return redirect()->back();


   }
}
