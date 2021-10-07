<?php

namespace App\Http\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Stock extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'dresscalc.stock';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $casts = [
        'id' => 'int',
        'created_at' => 'datetime',
    ];
    protected $fillable = [
        'clothes_id',
        'user_id',
        'entry',
        'value',
        'created_at',
        'created_by',
        'enabled',
    ];
}
