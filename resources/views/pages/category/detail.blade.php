
<x-admin-layout>
    <b>Detail Product</b>
    <p>Nama : {{$categories->name}}</p>
    <p>Slug : {{$categories->slug}}</p>
    <p>Product : {{$categories->product->category}}</p>
    <a href="/category/{{$product->category->slug}}"><p>Category : {{$product->category->name}}</p></a>
</x-admin-layout>
