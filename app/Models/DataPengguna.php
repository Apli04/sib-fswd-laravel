<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengguna extends Model
{
    protected $table = 'datapenggunas';
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'photo'
    ];
    use HasFactory;
}
