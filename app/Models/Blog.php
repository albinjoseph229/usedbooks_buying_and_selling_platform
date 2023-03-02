<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="blogs";
    protected $fillable = [
        'blog_title', 'id', 'blog_description','created_at','name','bimage1','bimage2','bdate'
    ];
}
