<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $table = 'manage';
    use SoftDeletes;
}
