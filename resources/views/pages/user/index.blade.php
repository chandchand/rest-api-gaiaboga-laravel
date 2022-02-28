<x-admin-layout>
    <a href="{{ route('user.create')}}" class="button">ADD USER</a>
<table>
    <thead>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        @forelse ($user as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->image }}</td>
            <td></td>
            <td>
                <a href="{{ route('user.edit', $item->id) }}" class="">Edit</a>
            </td>
            <td>
                <a href="{{ route('user.show', $item->id) }}" class="">Detail</a>
            </td>
            <td>
                <form action="{{route('user.destroy', $item->id)}}" method="post">
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
