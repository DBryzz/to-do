<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed', 'user_id', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function steps()
    {
        # code...
        return $this->hasMany(Step::class);
    }
}
