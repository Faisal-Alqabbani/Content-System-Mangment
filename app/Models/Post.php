<?php

namespace App\Models;

use App\Helpers\Slug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','slug','body','image_path','approved','category_id','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // has many comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    // approved it must starting with scope. 
    public function scopeApproved($query){
        return $query->whereApproved(true)->latest();
    }
    //get field name with out space or comma then attributes
    public function getImagepathAttribute($img){
        return asset('storage/images/'.$img);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Slug::uniqueSlug($value, 'posts');
    }
}
