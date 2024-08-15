<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori'];

    protected $table = 'kategori';

    // Relasi dengan Blog
    public function blog()
    {
        return $this->hasMany(Blog::class, 'id_kategori');
    }
}
