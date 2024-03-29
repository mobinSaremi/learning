<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'news';
    protected $fillable = [
        'title', 'image', 'description', 'status', 'title_seo','description_seo','writer', 'deleted_at', 'updated_at', 'created_at'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
 
}
