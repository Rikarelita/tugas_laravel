<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::with('category')->orderBy('created_at', 'DESC');


        if (!empty($request->q)) {
            $post = $post->where('title', 'LIKE', '%' . $request->q . '%');
        }

        if (!empty($request->status)) {
            $post = $post->where('is_active', $request->status);
        }

        if (!empty($request->from_date)) {
            $post = $post->whereBetween('created_at', [
                Carbon::parse($request->from_date)->format('Y-m-d') . ' 00:00:01',
                Carbon::parse($request->to_date)->format('Y-m-d') . ' 23:59:59'
            ]);
        }
        $post = $post->paginate(10);

        return view('dashboard.post.index', [
            'data' => $post
        ]);
    }

    public function create()
    {
        return view('dashboard.post.create', [
            'data' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $filename = "";

        if ($request->file('image')) {
            $file = $request->file('image');

            $filename = "image/" . date('YmdHi.') . $file->getClientOriginalExtension();
            $file->move(public_path('image'), $filename);
        }

        $post = Post::create([
            'title' => $request->title,
            'photo' => $filename,
            'description' => $request->description,
            'is_active' => $request->status,
            'category_id' => $request->category
        ]);

        if ($post) {
            return redirect('post')->with('success', 'Data Berhasil di Tambahkan');
        } else {
            return redirect('post')->with('error', 'Data Gagal Disimpan');
        }
    }


    public function edit($id)
    {
    }

    public function update($id, Request $request)
    {
    }

    public function destroy($id)
    {
    }

    public function show($id)
    {
    }
}