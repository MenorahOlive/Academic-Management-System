<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAllocation extends Model
{
    use HasFactory;
    protected $fillable = ['Lecturer', 'Unit', 'Group'];
    public function unit_()
    {
        return $this->belongsTo(Unit::class, 'unit');
    }
    public function group_()
    {
        return $this->belongsTo(Group::class, 'group');
    }
}
