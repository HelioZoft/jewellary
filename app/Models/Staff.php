<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';

    protected $fillable = [
        'name',
        'position',
        'email',
        'phone',
        'staffImg',
        'delete_status'
    ];
}
