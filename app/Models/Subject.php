<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    protected $fillable = [
        'sub_id',
        'crs_id',
        'sub_name',
        'hours',
        'year_level',
        'semester',
    ];

    public $incrementing = false;
    protected $primaryKey = 'sub_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->sub_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        do {
            $uniqueId = 'SUB-' . mt_rand(100, 999);
        } while (self::where('sub_id', $uniqueId)->exists());

        return $uniqueId;
    }

}
