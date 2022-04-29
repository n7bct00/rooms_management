<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Room;

class RoomController extends Controller
{
    public function dashboard()
    {
        if(auth()->user()->role == '1') 
        {
            $count = [];
            $count['rooms'] = DB::table('room_master')->where('status',1)->where('postby',auth()->user()->id)->count();
            $count['rooms_book'] = DB::table('room_master')->where('status',2)->where('postby',auth()->user()->id)->count();
            return view('dashboard',$count);
        }
        else
        {
            return redirect()->route('index');
        }
    }

    public function hotel_booking()
    {
        if(auth()->user()->role == '1')
        {
            return view('hotel_booking');
        }
        else
        {
            return redirect()->route('index');
        }
    }

    public function roomsadd(Request $request)
    {
        $valid =  $request->validate([
            'room_photo' => 'required|mimes:png,jpg,jpeg,gif,PNG,JPG,JPEG,GIF|max:2048',
            'per_rate' => 'required',
            'room_size' => 'required',
            'room_catagory' => 'required',
        ]);
     if ($request->file('room_photo')->isValid())
     {
        $max = DB::table('room_master')->max('id');
        $max = $max+1;
        $name = $max.'_'.$request->room_photo->getClientOriginalName();
        $filePath = $request->room_photo->move(public_path('uploads'), $name);
        $roomadd = Room::create([
            'room_catagory' => $request->room_catagory,
            'room_size' => $request->room_size,
            'per_rate' => $request->per_rate,
            'room_photo' => $name,
            'beds_count' => $request->beds_count,
            'free_wifi' => $request->free_wifi,
            'shower_bathtub' => $request->shower_bathtub,
            'postby' => auth()->user()->id,
            'status' => 1,
        ]);

         return back()->with('success','You have successfully Room add.');
     }
    else
    {
        return back()->withErrors(['message' => 'You have not successfully Room add.']);
    }
    }

    public function hotel_report()
    {
        if(auth()->user()->role == '1')
        {
        $user = auth()->user()->id;
        $rooms = DB::select("select * from room_master where postby='$user'");
        $rows = ['rooms'=>$rooms];
        if(count($rooms) > 0 )
        {
            return view('hotel_report', $rows);
        }
        else
        {

            return view('hotel_report')->withErrors(['message' => 'Please Add Rooms']);
        }
        }
        else
        {
            return redirect()->route('index');
        }

    }
     public function Roomedit($id)
    {
        $data = DB::table('room_master')->where('id','=',$id)->get();
        return redirect()->route('hotel_booking')->with([ 'data' => $data ]);
       
    }
    public function Roomupdated(Request $request,$id)
    {
        $update = Room::find($id);
        $update->room_catagory = $request->room_catagory;
        $update->room_size = $request->room_size;
        $update->per_rate = $request->per_rate;
        $update->beds_count = $request->beds_count;
        $update->free_wifi = $request->free_wifi;
        $update->shower_bathtub = $request->shower_bathtub;
        if($update->save())
        {
            return back()->with('success','You have successfully Room Updated.');
        }
        else
        {
            return back()->with('success','You have not successfully Room Updated.');
        }
    }
    public function Roomreset()
    {
        if(auth()->user()->role == '1')
        {
        $user = auth()->user()->id;
        $rooms = $users = DB::table('room_master')->join('room_books', 'room_master.postby', '=','room_books.postby')->select('room_master.*', 'room_books.*')->where(['room_master.postby' => $user,'room_master.status' => 2])->get();;
        if(count($rooms) > 0 )
        {
            return view('hotel_reset', compact('rooms'));
        }
        else
        {

            return view('hotel_reset')->with('message','Please Add Rooms');
        }
        }
        else
        {
            return redirect()->route('index');
        }
    }

    public function Roomselectdelete($id)
    {
       $update = Room::find($id);
       $update->status = 1;
       DB::table('room_books')->where('room_id',$id)->delete();
       if($update->save())
       {
        return redirect()->route('hotel_reset')->with('message','Room Vacant successfully updated');
       }
       else
       {
        return redirect()->route('hotel_reset')->with('message','Room Vacant Not successfully updated');
       }
    }

}
