<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'award_date',
        'awardImg',
        'delete_status',
    ];

    protected $casts = [
        'award_date' => 'date',
        'delete_status' => 'boolean',
    ];
}
