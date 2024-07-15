<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'judul_blog' => $this->faker->sentence(),
            'thumbnail' => $this->faker->imageUrl(),
            'deskripsi' => $this->faker->paragraph(),
            'id_kategori' => 1, // This will create a new category and get its ID
        ];
    }
}
