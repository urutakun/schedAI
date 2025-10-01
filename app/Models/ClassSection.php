<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    /** @use HasFactory<\Database\Factories\ClassSectionFactory> */
    use HasFactory;

    protected $fillable = [
        'sect_id',
        'crs_id',
        'sect_name',
        'year_level',
    ];

    public $incrementing = false;
    protected $primaryKey = 'sect_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->sect_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        // Get the latest sect_id (ordered descending)
        $lastId = self::orderBy('sect_id', 'desc')->value('sect_id');

        if ($lastId) {
            // Extract the numeric part (e.g. "SECTION-101" → 101)
            $lastNumber = (int) str_replace('SECTION-', '', $lastId);
            $newNumber = $lastNumber + 1;
        } else {
            // First department → start at 101
            $newNumber = 101;
        }

        return 'SECTION-' . $newNumber;
    }

}
