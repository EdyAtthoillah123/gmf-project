<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; // Corrected table name definition

    protected $fillable = [
        'nama_kategori',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'id_kategori', 'id'); // Corrected foreign key references
    }
}
