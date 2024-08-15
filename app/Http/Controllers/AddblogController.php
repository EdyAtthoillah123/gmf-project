<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all blogs with their associated categories
        $blogs = Blog::with('kategori')->get();

        return view('blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all categories for the dropdown in the form
        $categories = Kategori::all();

        // Send data to view
        return view('addblog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'required|exists:kategori,id', // Ensure the category exists
            'image-upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog-content' => 'required|string',
        ]);

        // Save the uploaded image to storage
        $thumbnail = '';
        if ($request->hasFile('image-upload')) {
            $file = $request->file('image-upload');
            $path = $file->store('public/thumbnails');
            $thumbnail = basename($path); // Get only the file name
        }

        // Save data to the database
        $blog = new Blog();
        $blog->judul_blog = $validatedData['judul'];
        $blog->thumbnail = $thumbnail;
        $blog->deskripsi = $validatedData['blog-content'];
        $blog->id_kategori = $validatedData['kategori'];
        $blog->save();

        // Redirect with a success message
        return redirect()->route('blog.create')->with('success', 'Blog berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Kategori::all();
        return view('addblog', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the blog to update
        $blog = Blog::findOrFail($id);

        // Validate the request input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'required|exists:kategori,id', // Ensure the category exists
            'image-upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog-content' => 'required|string',
        ]);

        // Handle image upload if a new file is provided
        if ($request->hasFile('image-upload')) {
            // Delete the old image
            Storage::delete('public/thumbnails/' . $blog->thumbnail);

            // Store the new image
            $file = $request->file('image-upload');
            $path = $file->store('public/thumbnails');
            $thumbnail = basename($path);

            // Update the blog thumbnail
            $blog->thumbnail = $thumbnail;
        }

        // Update the blog details
        $blog->judul_blog = $validatedData['judul'];
        $blog->deskripsi = $validatedData['blog-content'];
        $blog->id_kategori = $validatedData['kategori'];
        $blog->save();

        // Redirect with a success message
        return redirect()->route('blog.index')->with('success', 'Blog berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the blog to delete
        $blog = Blog::findOrFail($id);

        // Delete the blog image from storage
        Storage::delete('public/thumbnails/' . $blog->thumbnail);

        // Delete the blog from the database
        $blog->delete();

        // Redirect with a success message
        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus!');
    }
}
