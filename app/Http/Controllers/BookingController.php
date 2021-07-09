<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use App\Models\Bookinguser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
      // $bookings = Booking::with(['room.roomType','users:name'])->paginate(5);
       $bookings = Booking::paginate(13);

       return view('bookings.index',['bookings'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     
     */
    public function create()
    {
        //prepend method use for add the item in the beginning
        //should be use as key(id) by second argument in pluck method
        $users= User::all()->pluck('name','id');
        $rooms = Room::all()->pluck('number','id');
        return view('bookings.create')
            ->with('users', $users)
            ->with('rooms', $rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $booking = Booking::create($request->input());
       // Many to Many relationship
        // saving relationship
        $booking->users()->attach($request->input('user_id'));
  /*     Bookinguser::create([
        'booking_id' => $booking->id,
       'user_id' => $request->user_id
       ]);
       */
    
      return redirect()->action([BookingController::class,'index']);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show',['booking'=>$booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {

        $users= User::all()->pluck('name','id')->prepend('none');
        $rooms = Room::all()->pluck('number','id');
        $bookingsUser= Bookinguser::where('booking_id',$booking->id)->first();
        return view('bookings.edit')
                ->with('users',$users)
                ->with('rooms',$rooms)
                ->with('bookingsUser',$bookingsUser)
                ->with('booking',$booking); // passing a booking data 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
      
        $booking->fill($request->input());
        $booking->save();
        $booking->users()->sync([$request->input('user_id')]);
      //  $booking->users()->sync([$request->input('user)id')]);
      /*  Bookinguser::where('booking_id',$booking->id)
             ->update([
            'user_id'=> $request->user_id

        ]);
        */
        
        return redirect()->action([BookingController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {    
        $booking->users()->detach();
      //  Bookinguser::where('booking_id',$booking->id)->delete();
        $booking->delete();
       // DB::table('bookings')->where('id',$booking->id)->delete();
        return redirect()->action([BookingController::class,'index']);
    }
}
