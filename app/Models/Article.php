<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    public function author() {
    	return $this->belongsTo(User::class,'user_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
