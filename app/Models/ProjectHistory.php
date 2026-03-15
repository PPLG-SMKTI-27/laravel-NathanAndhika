<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectHistory extends Model
{
    protected $fillable = [
        'project_id',
        'title',
        'action',
    ];
}
