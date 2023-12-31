<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassMaterial extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','file_url','class'];
}
