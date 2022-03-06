
<x-admin-layout>
    <b>Detail Product</b>
    <p>Nama : {{$product->name}}</p>
    <p>Gambar : {{$product->image}}</p>
    <p>Link Tokped : {{$product->url_tokped}}</p>
    <p>Link Shopee : {{$product->url_shopee}}</p>
    <p>Link Lazada : {{$product->url_lazada}}</p>
    <p>Description : {{$product->description}}</p>
    <a href="/category/{{$product->category->slug}}"><p>Category : {{$product->category->name}}</p></a>
</x-admin-layout>
