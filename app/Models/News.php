<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['category_id', 'title', 'description', 'writer', 'source', 'image', 'study'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
