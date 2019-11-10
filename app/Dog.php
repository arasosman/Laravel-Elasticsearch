<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Dog extends Model
{
    use Searchable;

    protected $guarded = [];
}
