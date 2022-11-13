<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','content','description','image','posted','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
