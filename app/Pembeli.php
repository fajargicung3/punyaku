<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    public $table = 'tb_pembeli';
    public $primaryKey = 'id_pembeli';
    public $timestamps = false;
}
