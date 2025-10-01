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
        // Get the latest dept_id (ordered descending)
        $lastId = self::orderBy('crs_id', 'desc')->value('crs_id');

        if ($lastId) {
            // Extract the numeric part (e.g. "COURSE-105" → 105)
            $lastNumber = (int) str_replace('COURSE-', '', $lastId);
            $newNumber = $lastNumber + 1;
        } else {
            // First department → start at 101
            $newNumber = 101;
        }

        return 'COURSE-' . $newNumber;
    }
}
