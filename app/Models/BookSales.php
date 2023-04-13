<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSales extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="booksales";
    protected $fillable = [
        'book_id', 'bname', 'buyer_id','seller_id','date','amount','status'
    ];
}
