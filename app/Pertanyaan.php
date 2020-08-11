<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    
    // protected $fillable = ["judul","isi","tanggal_dibuat","tanggal_diperbaharui"];

    protected $guarded = [];
}
