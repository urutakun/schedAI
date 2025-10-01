<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = [
        'room_id',
        'room_name',
        'room_building',
        'room_capacity',
        'room_type',
    ];

    public $incrementing = false;
    protected $primaryKey = 'room_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->room_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        do {
            $uniqueId = 'RM-' . mt_rand(100, 999);
        } while (self::where('room_id', $uniqueId)->exists());

        return $uniqueId;
    }
}
