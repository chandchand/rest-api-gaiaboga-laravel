<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('pages.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('pages.product.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');

        $request->validate([
            'name'=> "required|string",
            'image'=> "image|file|max:2048",
            'url_tokped' => "string",
            'url_shopee' => "string",
            'url_lazada' => "string",
            'description' => "string",
            'category_id' => "required|string",
        ]);

        Product::create([
            'name' => $request->name,
            'image' => $request->file('image')->store('post-images'),
            'url_tokped' => $request->url_tokped,
            'url_shopee' => $request->url_shopee,
            'url_lazada' => $request->url_lazada,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('product.index')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return  view('pages.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.product.edit', compact('product'), [
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> "required|string",
            // 'image'=> "required|string",
            'url_tokped' => "string",
            'url_shopee' => "string",
            'url_lazada' => "string",
            'description' => "string",
            'category_id' => "required|string"
        ]);

        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            // 'image' => $request->image,
            'url_tokped' => $request->url_tokped,
            'url_shopee' => $request->url_shopee,
            'url_lazada' => $request->url_lazada,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('product.index')->with('success','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success','Berhasil Menghapus Data');
    }
}
