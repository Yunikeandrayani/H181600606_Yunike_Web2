<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';
    protected $filtable=[
        'nama','users_id'
    ];

    protected $casts=[

    ];
}
