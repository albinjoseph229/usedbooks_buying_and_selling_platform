<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="book";
    protected $fillable = [
        'bookname', 'sellers_id', 'price','sellers_id','sellers_id','sellers_id','sellers_id',
    ];
}
