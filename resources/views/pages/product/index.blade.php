<x-admin-layout>
    <a href="{{ route('product.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ADD PRODUCT</a>
    <table class="table-auto">
    <thead>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Nama</th>
        <th class="px-4 py-2">Gambar</th>
        <th class="px-4 py-2">Tokopedia</th>
        <th class="px-4 py-2">Shopee</th>
        <th class="px-4 py-2">Lazada</th>
        <th class="px-4 py-2">Desckripsi</th>
        <th class="px-4 py-2">Category</th>
        <th class="px-4 py-2">Action</th>
    </thead>
    <tbody>
        @forelse ($product as $item)
        <tr>
            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border px-4 py-2">{{ $item->name }}</td>
            <td class="border px-4 py-2">
                <div style="max-height: 100px; overflow:hidden;">
                    <img src="{{asset('storage/' . $item->image)}}" alt="">
                </div></td>
            <td class="border px-4 py-2">{{ $item->url_tokped }}</td>
            <td class="border px-4 py-2">{{ $item->url_shopee }}</td>
            <td class="border px-4 py-2">{{ $item->url_lazada }}</td>
            <td class="border px-4 py-2">{{ $item->description }}</td>
            <td class="border px-4 py-2">{{ $item->category->name }}</td>
            <td class="border px-4 py-2">
            <div class="flex items-center justify-between">
                <a href="{{ route('product.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('product.show', $item->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Detail</a>
            </div>
            <div class="flex items-center justify-between">
                <form action="{{route('product.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are u Sure?')" type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
            </td>
        </tr>
        @empty
            <tr>
                Data Ga ada Boss
            </tr>
        @endforelse
    </tbody>
</table>
</x-admin-layout>
