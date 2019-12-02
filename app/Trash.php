<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trash extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
}
