<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
//    use SoftDeletes;
//
//    protected $data=['deleted_at'];
//    protected $fillable=['title','content'];
//
    public $directory = '/images/';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class,'imageable');
    }

//    public function tags()
//    {
//        return $this->morphMany(Tag::class,'taggable');
//    }

    //Accessor
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    //Mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=strtoupper($value);
    }

    public function getPathAttribute($value)
    {
        return $this->directory.$value;
    }
}
