<x-admin-layout>
    @if(session('success'))
    {{session('success')}}
    @endif
<form action="{{ route('user.update', $users->id )}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $users->name }}">
    @error('name')
        {{$message}}
    @enderror
    <input type="email" name="email" value="{{ $users->email}}">
    @error('email')
        {{$message}}
    @enderror
    <button type="submit">Edit</button>
    <button type="reset">Cancel</button>
</form>
</x-admin-layout>

