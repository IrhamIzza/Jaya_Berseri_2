<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();

        return response()->json([
            'message' => 'ambil data artikel',
            'data' => $article
        ], 200);
    }
    public function pupukNPK()
    {

        // $article = Article::all();
        $article = Article::find(1);
        return view('produkNPK', compact('article'));
    }
    public function pupukDAP()
    {

        // $article = Article::all();
        $article = Article::find(2);
        return view('produkDAP', compact('article'));
    }
    public function show(string $id)
    {
        $user = Auth::user();
        $article = Article::find($id);
        // return view('article_edit',compact("article",'user'));
        return response()->json([
            'message' => 'ambil data artikel',
            'data' => $article
        ], 200);
    }

    public function Store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:100',
            'konten' => 'required|interger',

        ]);

        // return 
    }

    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $article = Article::findorfail($id);
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if (Storage::disk('public')->exists('uploads/'.$article->image)) {
                Storage::disk('public')->delete('uploads/'.$article->image);
                
            }
            $timestamp = date('d-m_H-i'); 
            // Simpan gambar baru
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'article' .($id).'_'.$timestamp. '.'. $extension;
            // Simpan Di storage atau di public/storage/uploads
            $file->storeAs('uploads',$filename, 'public');
            $validated['image'] = $filename;
        }

        $article->update($validated);
        // $article->update($request->all());
        // $article->judul = $request->judul;
        // $article->konten = $request->konten;
        // $article->save();
        // return redirect()->route('admin')->with('success', 'Post berhasil diupdate!');
        return response()->json($validated);
    }
}
