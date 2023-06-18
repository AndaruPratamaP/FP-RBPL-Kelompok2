<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postforum extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public $timestamps=false;
}
