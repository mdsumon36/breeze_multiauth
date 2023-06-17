<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Seller;
use Auth;

class SellerController extends Controller
{
    public function Index(){
        return view('seller.seller_login_from');
    }

    public function SellerDashboard(){
        return view('seller.index');
    }

    public function Login(Request $request){
        // dd($request->all());

        $check = $request->all();
        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('seller.dashboard')->with('error','Seller Login Successfully!');
        }else{
            return back()->with('error','Invalid email or Password');
        }
    }

    public function SellerLogout(){
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_from')->with('error','Seller Logout Successfully!');
    }

     public function SellerRegister(){
        return view('seller.seller_register');
    }

    public function SellerRegisterCreate(Request $request){
         // dd($request->all());
        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

         return redirect()->route('seller_login_from')->with('error','Seller Created Successfully!');
    }



}
