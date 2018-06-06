<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Photo;
use App\Rules\Alphaspace;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
      $request->validate([
        'first_name'=> 'max:30| required' ,
        'address'=>'required',
        'email'=>'email|required',
        'photo_id'=>'sometimes|image',
        'nic_number'=>'numeric|required|digits:9',
        'password'=>'max:20|min:5|required|confirmed',
                 
      ]);
        $input=$request->all();
      if ($file=$request->file('photo_id')) {
           $name=$file->getClientOriginalName();

           $file->move('images/profile-photo',$name);

           $photo =Photo::create(['file'=>$name]);

           $input['photo_id']=$photo->id;

                      // $user = new User;
                      // $user->photo_id=$photo->id;

         }
         $input['password']=bcrypt($request->password);
         User::create($input);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $user=User::findOrFail($id);
 
        $validateData = Validator::make($request->all(), [
        'first_name'=> 'max:30| required',new Alphaspace ,
        'address'=>'required',
        'email'=>'email|required',
        'photo_id'=>'sometimes|image',
        'nic_number'=>'numeric|required|max:9|min:9',
        'password'=>'sometimes|max:20|min:5|required|confirmed',
                  ]);
      $input=$request->all();

      if ($file=$request->file('photo_id')) {
           $name=$file->getClientOriginalName();

           $file->move('images/profile-photo',$name);

           $photo =Photo::create(['file'=>$name,'user_id'=> $user->id]);

           $input['photo_id']=$photo->id;

         }
           $input['password']=bcrypt($request->password);
         $user->update($input);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::destroy($id);
     return redirect('/users');
    }
}
