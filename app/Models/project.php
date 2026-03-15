<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
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

    protected static function booted()
    {
        static::created(function ($project) {
            \App\Models\ProjectHistory::create([
                'project_id' => $project->id,
                'title' => $project->title,
                'action' => 'created'
            ]);
        });

        static::deleted(function ($project) {
            \App\Models\ProjectHistory::create([
                'project_id' => $project->id,
                'title' => $project->title,
                'action' => 'deleted'
            ]);
        });
    }
}
