<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'room_master';
     protected $fillable = [
        'room_catagory','room_size','per_rate','room_photo','beds_count','free_wifi','shower_bathtub','postby','status',
    ];
}
