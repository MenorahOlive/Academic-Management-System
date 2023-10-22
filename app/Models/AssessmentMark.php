<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentMark extends Model
{
    use HasFactory;
    protected $fillable = ['assesment','mark','student'];
}
