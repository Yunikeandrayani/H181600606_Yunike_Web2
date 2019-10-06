<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_Galeri';
    protected $filtable=['nama','users_id'];
    protected $casts=[''];
}
