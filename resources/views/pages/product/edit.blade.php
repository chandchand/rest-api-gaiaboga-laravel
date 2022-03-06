<x-admin-layout>
    @if(session('success'))
        {{session('success')}}
    @endif
    <form class="w-full max-w-lg" action="{{ route('product.update', $product->id)}}" method="post">
        <div class="flex flex-wrap -mx-3 mb-6">
        @csrf
        @method('put')
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{ $product->name }}">
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="image" value="{{ $product->image }}">
            @error('image')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="url_tokped" value="{{ $product->url_tokped }}">
            @error('url_tokped')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="url_shopee" value="{{ $product->url_shopee }}">
            @error('url_shopee')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="url_lazada" value="{{ $product->url_lazada }}">
            @error('url_lazada')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description" value="{{ $product->description }}">
            @error('description')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="category_id">
                @foreach ($categories as $category )

                @if( old('category_id', $product->category_id)== $category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
                @endforeach
            </select>
            @error('category_id')
                {{$message}}
            @enderror
        </div>
    </div>

        <div class="flex items-center justify">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Update</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="reset">Cancel</button>
        </div>
</form>
</x-admin-layout>

