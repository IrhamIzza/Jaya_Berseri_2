<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function store(Request $request) {

        $item = Validator::make($request->all(),[
            'name' => 'required|unique:products,name',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', 
        ]);

        $data = $item->validate();
         // Buat time stamp
        $timestamp = date('d-m_H-i-s'); 

        $file = $request->file('image');
        $originalName = $timestamp . '_' . $file->getClientOriginalName();
        // Simpan Di storage atau di public/storage/uploads
        $path = $file->storeAs('uploads',$originalName, 'public');

        Product::create([
            'name'=> $data['name'],
            'price' => $data['price'],
            'image' => $originalName,
        ]);

        return response()->json([
            'message' => 'Upload berhasil!',
            'co' => $path,
        ]);
    }
}
