<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    // one room type have unique other unique room number
    // one room associated with the RoomType
    /*
     a roomtype  model might be associated with one room model,to define this relationship we will place a room method on the 
      RoomType. the room method should call the hasOne method and returns its result.In this case the Room model is automatically
      assumed that room_type_id foreign key, if you wish to overirfe this convention you may pass a second argument to the 
      hasOne method 
    */
    public function room()
    {
    	return $this->hasOne(Room::class,'room_type_id','id');
    }
    // we have one RoomType, but it relates to multiple other rooms
    public function rooms()
    {
    	//return $this->hasMany(Room::class, 'id', 'room_type_id');
        return $this->hasMany(Room::class, 'room_type_id', 'id');

    }
    
}
