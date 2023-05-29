<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @include('my_components.alert-success')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_users as $key => $item_user)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $item_user->name }}</td>
                <td>{{ $item_user->email }}</td>
                <td>
                    <a href="{{ route('user-detail', $item_user->id) }}" class="badge bg-primary">Detail</a>
                    <a href="{{ route('user-edit', $item_user->id) }}" class="badge bg-warning">Edit</a>
                    <a wire:click="delete({{ $item_user->id }})" class="badge bg-danger cursor-pointer">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>