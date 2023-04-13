<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookComplaint extends Model
{
    use HasFactory;
    protected $table="bookcomplaint";
    protected $fillable = [
        'buyer_id', 'seller_id', 'book_id','complaint','status'
    ];
}
