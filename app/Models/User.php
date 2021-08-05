<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\This;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     *  If there are many fillables or say all the fields must be filled we could use
     *  $guard array in which you specify the fields to be guarded. Fillable and guard 
     *  are used to specify which fields can be mass assigned.
     */

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
     protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    #    'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    # Mutator for Password
    public function setPasswordAttribute($password)
    {
        # code...
        $this->attributes['password'] = bcrypt('$password');
    }

    # Accessor for Name
    public function getNameAttribute($name) 
    {
        # code...
        return ucwords('My name is '.$name);
    }
}
