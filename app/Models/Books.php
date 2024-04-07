<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = "books";

    protected $fillable = [
        'stu_id',
        'title',
        'description',
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
