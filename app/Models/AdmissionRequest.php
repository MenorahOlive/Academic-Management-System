<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionRequest extends Model
{
    use HasFactory;
    protected $fillable=['first_name','last_name','course','grade','email'];


    public function course(){
        return $this->belongsTo(Course::class,'course');
    }
}