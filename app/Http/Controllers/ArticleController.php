<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
    }
    public function pupukNPK(){

        // $article = Article::all();
        $article = Article::find(1);
        return view('produkNPK',compact('article'));
    }
    public function pupukDAP(){

        // $article = Article::all();
        $article = Article::find(2);
        return view('produkDAP',compact('article'));
    }
    public function edit(string $id)
    {
        $user=Auth::user();
        $article=Article:: find($id);
        return view('article_edit',compact("article",'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
        ]);
        
        $article = Article::findorfail($id);
        $article->judul = $request->judul;
        $article->konten = $request->konten;
        $article->save();
        return redirect()->route('admin')->with('success', 'Post berhasil diupdate!');

    }

}