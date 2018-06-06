<?php

namespace App\Http\Controllers;

use App\Parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
       $parents = Parents::all();
       return view('admin.parents.index',compact('parents'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('admin.parents.create');   
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $input = $request->all();
       $request->validate([
        'name' => 'required',
        'gender'=>'required',
        'dob'=>'required|date',
       ]);

       Parents::create($input);
    return redirect('/parents');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Theme  $theme
    * @return \Illuminate\Http\Response
    */
   public function show(Parents $parent)
   {

   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Theme  $theme
    * @return \Illuminate\Http\Response
    */
   public function edit(Parents $parent)
   {
     return view('admin.parents.edit',compact('parent'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Theme  $theme
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Parents $parent)
   {
      $input = $request->all();
      $request->validate([
         'name' => 'string',
        'gender'=>'sometimes',
        'dob'=>'sometimes|date',
      ]);
      $parent =  Parents::findOrFail($parent->id);
      $parent->update($input);
    
      return redirect('/parents');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Theme  $theme
    * @return \Illuminate\Http\Response
    */
   public function destroy(Parents $parent)
   {
       Parents::destroy($parent->id);
       return redirect('/parents');
       
   }
}
