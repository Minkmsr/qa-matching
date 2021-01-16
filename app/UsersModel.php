<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class UsersModel extends Model
{
    protected $table = 'tb_sys_users';
    protected $primaryKey = 'sys_user_id';
}
