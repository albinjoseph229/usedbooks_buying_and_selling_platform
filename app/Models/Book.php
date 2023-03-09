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
        'bookname', 'bookdescription', 'price','address','bookdate',
        'phonenumber','coverpage1','coverpage2','sellers_id','location'
    ];
}
