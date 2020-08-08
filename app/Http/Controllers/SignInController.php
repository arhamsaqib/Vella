<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SignInController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }
    public function signup()
    {
        return view('auth.signup');
    }
    public function forget()
    {
        return view('auth.forgetPassword');
    }
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->password = $password;

        $user->save();
        return redirect('/');
    }
    public function postSignIn(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $current  = Auth::user();
            if ($current->role == 'admin') {
                return redirect('/home-admin');
            }
            return redirect('/home-user ');
        }
        return '<h1>Failed Attempt</h1>';
    }
    public function createNewUser(Request $request)
    {
        $email = $request['email'];
        $password = bcrypt($request['pass']);

        $user = new User();
        $user->email = $email;
        $user->password = $password;

        $user->save();
        $user_id = DB::table('users')->where('email', $email)->pluck('id');

        $fname = $request['fname'];
        $lname = $request['lname'];
        $timezone = $request['timezone'];
        $city = $request['city'];
        $phone = $request['phone'];
        $recurring = $request['recurring'];
        DB::table('user_info')->insert([
            [
                'firstname' => $fname,
                'user_id' => $user_id[0],
                'phone' => $phone,
                'timezone' => $timezone,
                'lastname' => $lname,
                'city' => $city,
                'recurring' => $recurring
            ]
        ]);
        return redirect('/user/create');
    }
    public function updateinfo(Request $request)
    {
        $current  = Auth::user();
        $email = $request['email'];
        $fname = $request['fname'];
        $lname = $request['lname'];
        $city = $request['city'];
        $phone = $request['phone'];
        $timezone = $request['timezone'];
        $cpass = $request['confirmpass'];
        $pass = $request['pass'];
        if ($email !== null && $email !== $current->email) {
            DB::table('users')
                ->where('id', $current->id)
                ->update(['email' => $email]);
        }
        if ($pass != null) {
            if ($pass === $cpass) {
                $pass = bcrypt($request['pass']);
                if ($pass !== $current->password) {
                    DB::table('users')
                        ->where('id', $current->id)
                        ->update(['password' => $pass]);
                }
            }
        }
        //-----
        $info_user = DB::table('user_info')->where('user_id', $current->id)->get();
        $info = $info_user[0];

        //-----
        DB::table('user_info')
            ->where('user_id', $current->id)
            ->update(['firstname' => $fname, 'lastname' => $lname, 'city' => $city, 'phone' => $phone, 'timezone' => $timezone]);

        return redirect('/settings/profile');
    }
}
