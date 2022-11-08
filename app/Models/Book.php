<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected  $primaryKey = 'book_id';

    public $timestamps = false;

    protected $fillable = [
        'author',
        'title'
    ];

    public function book_copy()
    {
        return $this->hasMany(Copy::class, /*ez a tábla ahova összekapcsolom*/'book_id', /*ez a tábla az ahol először létrehoztam az id-t*/'book_id');
    }
}
