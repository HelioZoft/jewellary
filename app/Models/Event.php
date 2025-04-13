<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'eventImg',
        'delete_status',
    ];

    protected $casts = [
        'event_date' => 'date',
        'delete_status' => 'boolean',
    ];
}
