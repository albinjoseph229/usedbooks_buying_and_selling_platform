<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReplies extends Model
{
    use HasFactory;
    protected $table="commentreplies";
    protected $fillable = [
        'buyer_id', 'seller_id', 'book_id','comment','date','reply'
    ];
}
