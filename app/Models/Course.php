<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillables = [
        'crs_id',
        'dept_id',
        'crs_name',
    ];

    public $incrementing = false;
    protected $primaryKey = 'crs_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->crs_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        do {
            $uniqueId = 'CRS-' . mt_rand(000000, 999999);
        } while (self::where('crs_id', $uniqueId)->exists());

        return $uniqueId;
    }
}
