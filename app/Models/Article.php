<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $table = 's_article';
    public $primaryKey = 'id';
    public $fillable = ['article','content'];
}
