<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'content'
    ];

    /**
     * @var array<string, string>
     */
    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
