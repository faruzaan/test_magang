<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    public $primaryKey = 'id';

    protected $table = 'tb_arc';

    protected $fillable = [
        'gambar_logo', 'judul', 'desc1', 'desc2'
    ];
}
