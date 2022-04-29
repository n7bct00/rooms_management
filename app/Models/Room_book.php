<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_book extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'room_books';
     protected $fillable = [
        'name','email','phoneno','room_id','postby',
    ];
}
