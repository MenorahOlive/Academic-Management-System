<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicNotice extends Model
{
    use HasFactory;
    protected $fillable = ['to','title','message'];
}
