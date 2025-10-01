<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    /** @use HasFactory<\Database\Factories\InstructorFactory> */
    use HasFactory;

    protected $fillable = [
        'instr_id',
        'dept_id',
        'instr_name',
        'instr_position',
    ];

    public $incrementing = false;
    protected $primaryKey = 'instr_id';
    protected $keyType = 'string';

    protected static function boot(){
        parent::boot();

        static::creating(function ($request) {
            $request->instr_id = self::generateUniqueId();
        });
    }

    private static function generateUniqueId()
    {
        // Get last numeric part after 'INS-'
        $lastId = self::select('instr_id')
            ->orderByRaw("CAST(SUBSTRING(instr_id, 5) AS UNSIGNED) DESC")
            ->value('instr_id');

        if ($lastId) {
            $lastNumber = (int) str_replace('INS-', '', $lastId);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 101; // start point
        }

        return 'INS-' . $newNumber;
    }

}
