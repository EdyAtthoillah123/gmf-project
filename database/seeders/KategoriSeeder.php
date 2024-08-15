<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['nama_kategori' => 'Edo'],
            ['nama_kategori' => 'Mantolas'],
            ['nama_kategori' => 'Palkon'],
            ['nama_kategori' => 'Kulup'],
            ['nama_kategori' => 'Allahuakbar'],
        ];

        foreach ($categories as $category) {
            Kategori::create($category);
        }
    }
}
