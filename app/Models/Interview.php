<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "interview";

    public function soal()
    {
        return $this->belongsTo("soal", "id_soal", "id_soal");
    }
}
