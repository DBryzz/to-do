<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;
use phpDocumentor\Reflection\Types\This;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
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
        'password',
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

    public static function uploadAvatar($image)
    {
        $filename = $image->getClientOriginalName();
        (new self())->deleteOldImage();
        $image->storeAs('images', $filename, 'public');
        auth()->user()->update(['avatar' => $filename]);
    }

    protected function deleteOldImage()
    {
        # code...
        if ($this->avatar) {
            # code...
            Storage::delete('/public/images/' . $this->avatar);
        }
    }


    /* 
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
    } */
    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
