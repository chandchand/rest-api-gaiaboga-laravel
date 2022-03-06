<x-admin-layout>
    <a href="{{ route('category.create')}}" class="button">ADD CATEGORY</a>
<table>
    <thead>
        <th>NO</th>
        <th>Nama</th>
        <th>Slug</th>
        <th>Action</th>
    </thead>
    <tbody>
        @forelse ($categories as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->slug }}</td>
            {{-- <td></td> --}}
            <td>
                <a href="{{ route('category.edit', $item->id) }}" class="">Edit</a>
            </td>
            {{-- <td>
                <a href="{{ route('category.show', $item->id) }}" class="">Detail</a>
            </td> --}}
            <td>
                <form action="{{route('category.destroy', $item->id)}}" method="post">
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
