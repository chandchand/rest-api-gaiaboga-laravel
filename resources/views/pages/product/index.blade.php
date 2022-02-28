<x-admin-layout>
    <a href="{{ route('product.create')}}" class="button">ADD PRODUCT</a>
<table>
    <thead>
        <th>ID</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Desckripsi</th>
        <th>ID Category</th>
        <th>Action</th>
    </thead>
    <tbody>
        @forelse ($product as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->image }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->id_category }}</td>
            <td>
                <a href="{{ route('product.edit', $item->id_product) }}" class="">Edit</a>
            </td>
            <td>
                <a href="{{ route('product.show', $item->id_product) }}" class="">Detail</a>
            </td>
            <td>
                <form action="{{route('product.destroy', $item->id_product)}}" method="post">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are u Sure?')" type="submit">Delete</button>
                </form>
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
