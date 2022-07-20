<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class User extends Authenticatable
{
    
    use Notifiable;
    protected $dates = ['created_at'];
    use SearchableTrait;
    protected $searchable = [        
        'columns' => [          
            'name' => 1,
        ],
    ];
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'akses', 'telp',
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
    ];
}


// class User extends Model
// {
//     use SearchableTrait;

//     protected $searchable = [
//         'columns' => [
//             'name' => 1,
//             'akses' => 2,
//         ],
//     ];
// }
