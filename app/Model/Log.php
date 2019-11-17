<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Log extends Model
{
    use Searchable;
}
