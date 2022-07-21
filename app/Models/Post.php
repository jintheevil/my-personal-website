<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'description',
        'title',
        'user_id',
    ];

    public function users() {
        $this->hasOne(User::class, 'id');
    }
}
