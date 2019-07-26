<?php

namespace Modules\Wisata\Entities;

use Illuminate\Database\Eloquent\Model;

class WisataModel extends Model
{
    protected $fillable = [];
    protected $table = 'wisata';
    protected $primaryKey='id_wisata';
}
