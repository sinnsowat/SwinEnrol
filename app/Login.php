<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';
    
    // primary key
    protected $primaryKey = 'username';
    public $incrementing = false;
}
