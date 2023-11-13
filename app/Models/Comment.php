<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name','commentable_id','commentable_type','comment','email','status'
    ];
    public function commentable(){
        return $this->morphTo();
    }
    public function article(){
        return $this->belongsTo(Article::class,'commentable_id', 'id')->withTrashed();
    }
    public function new(){
     
        return $this->belongsTo(News::class,'commentable_id')->withTrashed();
    }
}
