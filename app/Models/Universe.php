<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $table = "universes";

    protected $fillable = [
        'name',
    ];

    public function superheroes()
    {
        return $this->hasMany(Superhero::class);
    }
<<<<<<< HEAD
=======

>>>>>>> 3227cab844036346eab5256005f9cb9212456e76
}
