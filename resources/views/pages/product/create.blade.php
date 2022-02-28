<x-admin-layout>
    @if(session('success'))
    {{session('success')}}
    @endif
<form action="{{ route('product.store' )}}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name' )}}">
    @error('name')
        {{$message}}
    @enderror
    <input type="text" name="image" value="{{ old('image' )}}">
    @error('image')
        {{$message}}
    @enderror
    <input type="text" name="description" value="{{ old('description' )}}">
    @error('description')
        {{$message}}
    @enderror
    <input type="text" name="id_category" value="{{ old('id_category' )}}">
    @error('id_category')
        {{$message}}
    @enderror
    <button type="submit">Create</button>
</form>
</x-admin-layout>

