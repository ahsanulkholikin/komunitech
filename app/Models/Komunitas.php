<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Komunitas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'logo',
        'banner',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'komunitas_users', 'komunitas_id', 'user_id');
    }

    public function admins()
    {
        return $this->belongsToMany(User::class, 'komunitas_admins', 'komunitas_id', 'user_id');
    }
}
