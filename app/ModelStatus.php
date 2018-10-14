<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelStatus extends Model
{
    protected $table = 'status';
    protected $fillable = ['status'];
}
