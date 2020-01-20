<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use QRCode;
class GenerateUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
 
      
        return view('generate_user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generate_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,   
            'email'=>$request->email,   
            // 'password'=>$request->password, 
            //'password' => bycrypt($request->password), 
            'password' => Hash::make($request->password), 
            'position'=>$request->position,   
            'visitor_number'=>$request->visitor_number,   
            'lastname'=>$request->lastname,   
            'qrcode'=>'Name: '.($request->name).'  '
                      .'Lastname: '. ($request->lastname),
//            'qrcode'=>' Nom : '.$request->name.' Prenom : '.$request->prenom, \
           // 'qrcode'=>'name',
      
       ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('generate_user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
