<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'event_id',
        'event_name',
        'location',
        'start_time',
        'end_time',
    ];

    public $incrementing = false;
    protected $primaryKey = 'event_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->event_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        do {
            $uniqueId = 'EVENT-' . mt_rand(1, 999);
        } while (self::where('event_id', $uniqueId)->exists());

        return $uniqueId;
    }
}
