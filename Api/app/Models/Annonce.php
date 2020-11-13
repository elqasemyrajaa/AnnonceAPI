<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $table = "annonce";
    protected $primaryKey = 'id_annonce';
    protected $fillable = [
        'id_annonce',
        'description',
        'price',
        'img1',
        'img2',
        'img3',
        'img4',
        'date_publication',
        'id_category',
        'id_user'
    ];
}
