<x-admin-layout>
<table>
    <h1>{{ $category }}</h1>
    <thead>
        <th>ID</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Desckripsi</th>
        <th>Category</th>
    </thead>
    <tbody>
        @forelse ($products as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->image }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->category->name }}</td>
        </tr>
        @empty
            <tr>
                Data Ga ada Boss
            </tr>
        @endforelse
    </tbody>
</table>
</x-admin-layout>
