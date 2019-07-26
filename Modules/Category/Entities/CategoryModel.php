<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $fillable = [];
    protected $table='category';
    protected $primaryKey='id_category';
}
