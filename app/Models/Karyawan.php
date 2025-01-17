<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'karyawan_id', 'id_sap');
    }
}
