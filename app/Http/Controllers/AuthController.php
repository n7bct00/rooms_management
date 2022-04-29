<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use DB;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\Field;

class AuthController extends Controller
{
    public function registeruser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneno = $request->phoneno;
        $pwd = $request->password;
        $user->password = Hash::make($pwd);
        $user->role = $request->role;
        $user->save();
        return redirect()->to('/login');
    }
    public function loginuser (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) 
        {
         if(auth()->user()->role == '1')
        {
             return redirect()->intended('dashboard');
        }
        elseif(auth()->user()->role == '2')
        {
            return redirect()->route('room_book');
        }   
        }
        else
        {
         return back()->withErrors([
                'message' => 'The email or password is incorrect'
            ]);
        }
        
    }
    // public function testla(Request $request)
    // {
    //      $input = $request->all();
    //      $out = [];
    //      $ar = DB::table('users')->where('role','=',$request->role)->get();
    //      foreach ($ar as $val)
    //      {
    //         $out[]=$val->email;
    //         $out[]=$val->name;
    //      } 
    //      return response()->json(['output'=>[$out]]);
    // }
    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
    //  public function formcreate(FormBuilder $formBuilder)
    // {
    //     $form = $formBuilder->createByArray([
    //                     [
    //                         'name' => 'name',
    //                         'type' => Field::TEXT,
    //                         'attr' => ['class' => 'form-control form-control-sm'],
    //                         'rules' => 'required|min:5',
    //                     ],
    //                     [
    //                         'name' => 'lyrics',
    //                         'type' => Field::TEXTAREA,
    //                         'attr' => ['class' => 'form-control form-control-sm'],
    //                     ],
    //                     [
    //                         'name' => 'publish',
    //                         'type' => Field::CHECKBOX,
    //                         'attr' => ['class' => 'form-check form-check-input'],
    //                     ],
    //                 ]
    //         ,[
    //         'method' => 'POST',
    //         'class' =>'main-form full'
    //     ]);

    //     return view('form', compact('form'));
    // }
}

