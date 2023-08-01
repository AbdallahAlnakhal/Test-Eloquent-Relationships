
<table>
    <thead>
        <tr>
            <th>Task Name</th>
            <th>User Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->user ? $task->user->name : 'N/A' }}</td> {{-- Display user name if user is available, otherwise 'N/A' --}}
        </tr>
        @endforeach
    </tbody>
</table>

