<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_information extends Model
{
    protected $table = 'personal_information';

    protected $fillable = ['fullname', 'age', 'gender', 'status'];
}
