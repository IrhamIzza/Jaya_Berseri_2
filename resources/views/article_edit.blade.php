@extends('layouts.app_admin')

@section("content")
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Edit Article</h1>
  
    <form action="{{ route('article.update', $article->id) }}" method="POST" class="space-y-4">
      @csrf
      @method('PUT')
  
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
        <input type="text" name="judul" id="judul"
               value="{{ old('judul', $article->judul) }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('title')
          <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
      </div>
  
      <div>
        <label for="konten" class="block text-sm font-medium text-gray-700">Konten</label>
        <textarea name="konten" id="konten" rows="5"
                  class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('konten', $article->konten) }}</textarea>
        @error('konten')
          <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
      </div>
  
      <div class="flex justify-end">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>
@endsection