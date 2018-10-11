<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\AssignOp\Mod;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data = ModelUser::all();
//        return view('user', compact('data'));
        if (!Session::get('login')) {
            return redirect('/login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('dashboard');
        }
    }

    public function loginPost(Request $request) {
        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if (count($data) > 0) {
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('/');
            } else {
                return redirect('/login')->with('alert','Password atau Email, Salah!'.
                    Hash::check($password, $data->password));
            }
        } else {
            return redirect('/login')->with('alert', 'Password atau Email, Salah !!');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function login() {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
