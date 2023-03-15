<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="blogcomments";
    protected $fillable = [
        'blog_id ', 'id', 'user_id ','created_at','commentdate','comment'
    ];
}
