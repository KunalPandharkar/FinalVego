<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function registercustomer(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|max:10|digits:10',
            'city' => 'required|max:20|alpha',
            'password' => 'required|min:8|max:30|confirmed',
        ]);


        try {
            $id = DB::table('customers')->insertGetId(
                [
                    'contact1' => $validatedData['phone'],
                    'cust_city' => $validatedData['city'],
                    'cust_password' => $validatedData['password'],
                ]
            );
            session(['user' => $id]);
            return redirect('index.html')->with('sucessregistered', "You're Registered Successfully");
        } catch (\Exception $e) {
            return back()->with('alreadyregistered', "You're Already Registered, Please Login");
        }
    }

    public function logincustomer(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|max:10|digits:10',
            'password' => 'required|min:8|max:30',
        ]);
        try {
            $users = DB::table('customers')->where([
                ['contact1', '=', $validatedData['phone']],
                ['cust_password', '=', $validatedData['password']],
            ])->value('id');

            if (!empty($users)) {
                session(['user' => $users]);
                return redirect('index.html');
            } else {
                return back()->with('failedlogin', "You Have Entered Wrong Phone and Password !");
            }
        } catch (\Exception $e) {
            echo "<h1>" . 'something went wrong' . "</h1>";
        }
    }
    public function showuserprofile()
    {
        if (session()->has('user')) {
            $users = DB::table('customers')->where('id', session()->get('user'))->get();
            $userdata = array();
            foreach ($users as $user) {
                $userdata = $user;
            }
            return view('userprofile', ['usersdata' => $userdata]);
        } else {
            return view('register');
        }
    }
    public function logoutuser()
    {
        session()->forget('user');
        return redirect('login.html')->with('logoutsuccess',"You're Logged Out");
    }
}
