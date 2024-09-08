<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    public $table = "partner";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
