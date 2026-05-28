<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // Allow saving data to these columns
    protected $fillable = ['name', 'email', 'subject'];
}
