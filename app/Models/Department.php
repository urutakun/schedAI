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
        'code',
        'name',
        'head'
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
        do {
            $uniqueId = 'DEPT-' . mt_rand(000000, 999999);
        } while (self::where('dept_id', $uniqueId)->exists());

        return $uniqueId;
    }
}
