<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Room_book;
use DB;

class RentController extends Controller
{
    public function Roombook()
    {
        if(auth()->user()->role == '2')
        {
           $rooms =  DB::table('room_master')->where('status',1)->get();
           if(count($rooms)>0)
           {
            return view('room_book',compact('rooms'));
           }
           else
           {
            return view('room_book');
           }
           
        }
        else
        {
            return redirect()->route('dashboard');
        }

    }
    public function Roombookadd(Request $request)
    {
       foreach ($request->selectroom as $key => $val) 
       {
            $val = explode('|', $val);
            $save =  Room_book::create([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'phoneno' => auth()->user()->phoneno,
            'room_id' => $val[0],
            'postby' => $val[1],
           ]);
          $update = Room::find($val[0]);
          $update->status = 2;
          $update->save();
       }
       if($save)
       {
        return back()->with('msg','You have successfully Select Room add.');
       }
       else
       {
        return back()->with('msg','You have not successfully Select Room add.');
       }
    }
    
}
