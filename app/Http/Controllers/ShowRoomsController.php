<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Queue\NullQueue;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $roomType= null )
    {
       if(isset($roomType))
      {
          $rooms = Room::where('room_type_id','!=',$roomType)->get();   
      }
      else
       {
          $rooms = Room::get();
       }
      
        // values of key rooms is going to be our rooms variable
      return view('rooms.index',['rooms' => $rooms]);
        
       // http://127.0.0.1:8888/rooms/1
        //

        // one to one relationship 
     /*  $room = RoomType::find(1)->room;
       echo '<pre>';
       echo $room;
       */
    }
}
