<x-admin-layout>
    @if(session('success'))
    {{session('success')}}
    @endif
<form class="w-full max-w-lg" action="{{ route('product.store' )}}" method="post" enctype="multipart/form-data">
    <div class="flex flex-wrap -mx-3 mb-6">
    @csrf
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="name">Product</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{ old('name' )}}">
        @error('name')
            {{$message}}
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="flex justify-center">
            <div class="mb-3 w-96">
              <label for="image" class="form-label inline-block text-gray-700 @error('image') is-invalid @enderror" >Gambar</label>
              <input class="form-control
              block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-30 rounded transition ease-in-out m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image" name="image">
            </div>
          </div>
        {{-- <label for="image">Gambar</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="image" value="{{ old('image' )}}"> --}}
        @error('image')
            {{$message}}
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="url_tokped">Tokped</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="url_tokped" value="{{ old('url_tokped' )}}">
        @error('url_tokped')
            {{$message}}
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="url_shopee">Shopee</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="url_shopee" value="{{ old('url_shopee' )}}">
        @error('url_shopee')
            {{$message}}
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="url_lazada">Lazada</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="url_lazada" value="{{ old('url_lazada' )}}">
        @error('url_lazada')
            {{$message}}
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="description">Deskripsi</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description" value="{{ old('description' )}}">
        @error('description')
            {{$message}}
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="category_id">Category</label>
        <div class="inline-block relative w-64">
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="category_id">
            @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
            @error('category_id')
                {{$message}}
            @enderror
    </div>
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
    </div>
</form>
</x-admin-layout>

