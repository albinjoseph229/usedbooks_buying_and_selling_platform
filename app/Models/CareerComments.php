<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerComments extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="career_comments";
    protected $fillable = [
        'career_id ', 'id', 'user_id ','created_at','commentdate','comment'
    ];
}
