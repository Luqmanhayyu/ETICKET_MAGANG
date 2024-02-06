<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'password',
        'no_telp',
        'alamat',
    ];

    // Menetapkan tipe primary key ke integer
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    protected $keyType = 'int';

    // ...
}
