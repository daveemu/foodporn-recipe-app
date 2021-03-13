<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image'
    ];

    public function ingredients() 
    {
        return $this->hasMany(Ingredient::class);
    }

    public function tasks() 
    {
        return $this->hasMany(Task::class);
    }

    public function image() 
    {
        return $this->image;
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function ownedBy(User $user) 
    {
        return $user->id === $this->user_id;
    }
}
