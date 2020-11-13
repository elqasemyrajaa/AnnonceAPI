<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_user',
        'CIN',
        'name',
        'adress',
        'tel',
        'email',
        'image',
        'username',
        'password'
    ];
}
