<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'tags' => 'nullable|string|max:255',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('storage/blogs', 'public');
        }

        $blog = Blog::create($data);

        return redirect()->route('blogs.edit', $blog->id)->with('success', 'Blog created successfully! You can now edit the details.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'tags' => 'nullable|string|max:255',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image_path) {
                Storage::disk('public')->delete($blog->image_path);
            }
            $data['image_path'] = $request->file('image')->store('storage/blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        // Delete image file
        if ($blog->image_path) {
            Storage::disk('public')->delete($blog->image_path);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
