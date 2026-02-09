<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'description',
        'technology',
    ];
    protected $casts = [
        'technology' => 'array',
    ];

    protected $primaryKey = 'id';
    public $timestamps = true;
}
