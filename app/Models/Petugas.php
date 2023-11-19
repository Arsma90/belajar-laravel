<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;
    protected $table = "petugas";
    protected $guard = "petugas";

    protected $fillable = ["id", "nama_petugas", "username", "password", "telp", "level"];

    protected $hidden = [
        'password',
    ];
}