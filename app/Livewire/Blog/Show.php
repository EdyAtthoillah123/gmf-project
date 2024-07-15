<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\Kategori;
use Livewire\Component;

class Show extends Component
{
    public function render()

    {
        // $blog = Kategori::with('blogs')->paginate();
        // dd($blog);
        // return view('livewire.blog.show', [
        //     'blog' => Kategori::with('blogs')->get()
        // ]);
        return view('livewire.blog.show', [
            'blog' => Blog::paginate(10),
        ]);
    }
    public function deletBlog(Blog $blog)
    {
        $blog->delete();
        session()->flash('success', 'Blog berhasil dihapus.');
    }
}
