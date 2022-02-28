<x-admin-layout>
    @if(session('success'))
        {{session('success')}}
    @endif
    <form action="{{ route('product.update', $product->id_product)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $product->name }}">
        @error('name')
            {{$message}}
        @enderror
        <input type="text" name="image" value="{{ $product->image }}">
        @error('image')
            {{$message}}
        @enderror
        <input type="text" name="description" value="{{ $product->description }}">
        @error('description')
            {{$message}}
        @enderror
        <input type="text" name="id_category" value="{{ $product->id_category }}">
        @error('id_category')
            {{$message}}
        @enderror
        <button type="submit">Update</button>
        <button type="reset">Cancel</button>
    </form>
    </x-admin-layout>

