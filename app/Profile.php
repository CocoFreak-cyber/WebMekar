<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profil';
    protected $fillable = [
        'scansk',
        'nolegal',
        'about',
        'logo',
        'alamat',
        'email',
        'telpon'
        ];
}
