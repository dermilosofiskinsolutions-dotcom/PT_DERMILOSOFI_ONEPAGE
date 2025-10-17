<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'type',
        'report_date',
        'is_active'
    ];

    protected $casts = [
        'report_date' => 'date',
        'is_active' => 'boolean'
    ];
}
