<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }


    public function register()
    {
        return view('register');
    }


    public function auth(Request $request)
    {
        // return $request->post();
        $username = $request->post('username');
        $password = $request->post('password');
        // $result = Login::where(['user_name'=>$username,'password'=>$password])->get();
        $result = Login::where(['user_name'=>$username])->first();
        if($result){
            if(Hash::check($request->post('password'), $result->password)){
                $request->session()->put('LOGIN_SUC',true);
                return redirect('');
            }else{
                $request->session()->flash('msg','Invalid Creadentails');
                return redirect('login');
            }
        }
        else{
            $request->session()->flash('msg','Invalid Creadentails');
            return redirect('login');
        }
        // echo '<pre>';
        // print_r($result);
    }




    public function create(Request $request)
    {
        $res =new Login;
        $res->first_name=$request->input('f_name');
        $res->lastname=$request->input('l_name');
        $res->phone_no=$request->input('phone');
        $res->email=$request->input('email');
        $res->zip_code=$request->input('zip');
        $res->country=$request->input('country');
        $res->user_name=$request->input('username');
        $res_pas =Hash::make($request->input('password'));
        $res->password=$res_pas;
        $res->save();

        $request->session()->flash('msg','Registerd Successfully');
        return redirect('login');
    }

    public function destroy(Login $login)
    {
        //
    }


    public function show(Login $login)
    {
        //
    }


    public function edit(Login $login)
    {
        //
    }
}
