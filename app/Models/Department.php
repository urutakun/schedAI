<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    protected $fillable = [
        'dept_id',
        'dept_name',
    ];

    public $incrementing = false;
    protected $primaryKey = 'dept_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->dept_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        // Get the latest dept_id (ordered descending)
        $lastId = self::orderBy('dept_id', 'desc')->value('dept_id');

        if ($lastId) {
            // Extract the numeric part (e.g. "DPT-101" → 101)
            $lastNumber = (int) str_replace('DPT-', '', $lastId);
            $newNumber = $lastNumber + 1;
        } else {
            // First department → start at 101
            $newNumber = 101;
        }

        return 'DPT-' . $newNumber;
    }
}
