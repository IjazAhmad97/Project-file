<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = "records";

    public $timestamps = false;

    public function lab(){
        return $this->belongsTo(Libraries::class);
    }
}
