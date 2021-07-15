

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Todo</th>
            <th>Status</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
        @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->id  }}</td>
            <td>{{ $todo->todo  }}</td>
            <td>{{ $todo->status  }}</td>
            <td>{{ $todo->user_id  }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
