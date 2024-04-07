<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";

    protected $fillable = [
        'name',
        'class'
    ];

    public function book(){
        return $this->hasOne(Books::class, 'stu_id', 'id');
    }
}
