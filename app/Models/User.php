<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'user';
    public $primaryKey = 'id_user';
    public $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_user',
        'name',
        'username',
        'password',
        'last_login',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function fkStok()
    {
        return $this->hasMany(FkStok::class, 'id_user', 'id_user');
    }
}
