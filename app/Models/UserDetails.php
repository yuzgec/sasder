<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'user_details';

    public function getUser(){
        return $this->belongsTo('App\Models\User', 'id');
    }

}
