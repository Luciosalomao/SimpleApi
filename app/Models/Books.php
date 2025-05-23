<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['name', 'author', 'publish_date'];
}
