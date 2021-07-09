<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    public $timestamps = true;

   
    //  Where our primary model, room, belongs to the secondary model roomType. 
    // It forms this relationship using the room_type_Id field, notice the model name matches the primary key
    // for our secondary model. So room belongs to a roomType, via the room.roomTypeId that matches the roomTypeId value.
    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }
    
}
