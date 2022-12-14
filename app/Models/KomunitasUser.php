<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KomunitasUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'komunitas_id',
        'user_id',
    ];
}
