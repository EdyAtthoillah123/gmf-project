<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class Createmodal extends Component
{
    public function render()
    {
        return view('livewire.blog.createmodal');
    }
    public function save()
    {
        $validated = $this->validate([
            'judul_blog' => 'required|max:255',
            'thumbnail' => 'required|email|max:255',
            'deskripsi' => 'required|max:255',
            'id_kategori' => 'required|max:255',
        ]);

        Blog::create([
            'judul_blog' => $validated['judul_blog'],
            'thumbnail' => $validated['thumbnail'],
            'deskripsi' => $validated['deskripsi'],
            'id_kategori' => $validated['id_kategori'],
        ]);

        session()->flash('success', 'Blog berhasil ditambahkan.');

        // Reset input setelah penyimpanan berhasil
        $this->reset();

        // Redirect ke halaman /karyawan setelah save berhasil
        return redirect('/blog');
    }
}
