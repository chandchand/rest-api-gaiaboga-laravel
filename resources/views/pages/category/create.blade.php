<x-admin-layout>
    @if(session('success'))
    {{session('success')}}
    @endif
<form action="{{ route('category.store' )}}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name' )}}">
    @error('name')
        {{$message}}
    @enderror
    <input type="text" name="slug" value="{{ old('slug' )}}">
    @error('slug')
        {{$message}}
    @enderror
    <button type="submit">Create</button>
</form>
</x-admin-layout>

