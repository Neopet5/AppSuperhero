<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "genders";

    protected $fillable = [

        'name',
    ];

    public function superheroes()
<<<<<<< HEAD
    {
        return $this->hasMany(Superhero::class);
    }
=======
{
    return $this->hasMany(Superhero::class);
}
>>>>>>> 3227cab844036346eab5256005f9cb9212456e76
}
