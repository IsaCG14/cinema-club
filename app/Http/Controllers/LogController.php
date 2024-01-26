<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Auth\RegisterController;

class LogController extends Controller
{

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    public function login(LoginRequest $request){
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return Redirect::to('/admin');
        }
        Session::flash('message-error', 'Los datos son incorrectos.');
        return Redirect::to('/');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        $registerController = new RegisterController();
        $response = $registerController->store($request);
        Session::flash('message', 'El usuario se ha registrado con exito.');
        return Redirect::to("/");
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
