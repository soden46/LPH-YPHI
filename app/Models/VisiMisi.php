<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    public $table = "visi_misi";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
