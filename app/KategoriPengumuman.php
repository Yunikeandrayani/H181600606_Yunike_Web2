<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_Pengumuman';
    protected $filtable=['nama','users_id'];
    protected $casts=[];
}
