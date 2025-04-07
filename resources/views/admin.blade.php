@extends('layouts.app_admin')

@section('content')
<section class="p-6">
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
            <thead class="bg-gray-100 text-gray-700 ">
              <tr>
                <th class="border px-6 py-3 text-left text-sm font-medium">No</th>
                <th class="border px-6 py-3 text-left text-sm font-medium">Judul</th>
                <th class="border px-6 py-3 text-left text-sm font-medium">Penulis</th>
                <th class="border px-6 py-3 text-left text-sm font-medium">Tanggal</th>
                <th class="border px-6 py-3 text-left text-sm font-medium">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-gray-700  ">
              @foreach ($articles as $article)
                <tr>
                    <td class="border px-6 py-4">{{$loop->iteration }}</td>
                    <td class="border px-6 py-4">{{$article->judul}}</td>
                    <td class="border px-6 py-4">{{$article->konten}}</td>
                    <td class="border px-6 py-4">{{$article->updated_at}}</td>
                    <td class="border px-6 py-4 text-center">
                        <div class="flex flex-col items-center gap-2">
                          <a href="{{ route('article.edit', $article->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
                            EDIT
                          </a>
                          <a href="/halaman-tujuan" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md">
                            DELETE
                          </a>
                        </div>
                      </td>                                        
                </tr>    
              @endforeach
            </tbody>
          </table>
        </div>
      </div>        
</section>
@endsection