<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';
    protected $filtable=['nama','users_id'];
    protected $casts=[''];
}
