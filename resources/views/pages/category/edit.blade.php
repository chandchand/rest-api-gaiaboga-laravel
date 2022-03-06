<x-admin-layout>
    @if(session('success'))
        {{session('success')}}
    @endif
    <form action="{{ route('category.update', $categories->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $categories->name }}">
        @error('name')
            {{$message}}
        @enderror
        <input type="text" name="slug" value="{{ $categories->slug }}">
        @error('slug')
            {{$message}}
        @enderror
        <button type="submit">Update</button>
        <button type="reset">Cancel</button>
    </form>
    </x-admin-layout>

