<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'username', 'user_verified_at', 'password','role_id','user_sex','user_tel','user_address','user_email'];
    protected $primaryKey = 'user_id';
    protected $table = 'tbl_user';
}
