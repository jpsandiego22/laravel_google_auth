<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Redirect;
use Laravel\Socialite\Facades\Socialite;


class auth_googleController extends Controller 
{
    public function index(){
        return Socialite::driver('google')->redirect();
        
    }
    public function callback(Request $request)
    {
        try{
            $user = Socialite::driver('google')->user();
            print_r($user);
            print_r('<br><br><br><br><br>');
            print_r($user->token);
            print_r($user->refreshtoken);
        } catch(\Exception $e){
            return redirect('/login');
        }
    }
}