<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Yang boleh di isi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Yang ga boleh di isi
    protected $guarded = ['id'];
}
