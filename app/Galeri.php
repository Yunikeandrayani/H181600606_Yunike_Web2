<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';
    protected $filtable=['nama','users_id'];
    protected $casts=[''];
}
