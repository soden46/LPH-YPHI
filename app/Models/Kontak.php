<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    public $table = "kontak";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
