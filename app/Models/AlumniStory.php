<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlumniStory extends Model
{
    use SoftDeletes;

    protected $table = 'alumni_story';

    protected $fillable = [
        'nama',
        'angkatan',
        'pekerjaan',
        'perusahaan',
        'testimoni',
        'foto',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
