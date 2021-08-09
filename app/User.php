<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_seen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
//        'created_at' => 'datetime:l',// Friday
//        'created_at' => 'datetime:F',// August
//        'created_at' => 'datetime:j',// Date 6
//        'created_at' => 'datetime:Y',//  2021
//        'created_at' => 'datetime:g',//  1 pm
//        'created_at' => 'datetime:i',//  36 minute
//        'created_at' => 'datetime:g:i',//  1:36
//        'created_at' => 'datetime:g:i a',//  1:36 pm
//        'created_at' => 'datetime:d.m.y',//  06.08.21
//          'created_at' => 'datetime:Y.m.d',//  2021.08.06

        /*
         * $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
            $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
            $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
            $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
            $today = date("H:i:s");                         // 17:16:18
            $today = date("Y-m-d H:i:s");
         *
         * */


    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }



}
