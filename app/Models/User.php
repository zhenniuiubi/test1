<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //转换成数组或 JSON 时隐藏属性
        'password', 'remember_token',
    ];

    public function gravatar($size='100')
    {
        $hash = md5(strtolower('247399462@qq.com'));
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }
}
