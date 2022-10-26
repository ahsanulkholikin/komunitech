<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'komunitas_id',
        'user_id',
        'judul',
        'slug',
        'konten',
    ];

    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        return $this->hasMany(PostMedia::class);
    }

    public function vote()
    {
        return $this->hasMany(PostVote::class);
    }

    public function comment()
    {
        return $this->hasMany(PostComment::class);
    }
}
