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
        do {
            $uniqueId = 'INST-' . mt_rand(000000, 999999);
        } while (self::where('instr_id', $uniqueId)->exists());

        return $uniqueId;
    }
}
