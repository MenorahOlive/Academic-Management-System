<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['email_address','first_name','last_name','role_id','department_id'];
    use HasFactory;

    public function role(){
        return $this->belongsTo(Roles::class,'role_id');
    }
    public function department(){
        return $this->belongsTo(departments::class,'department_id');
    }
}
