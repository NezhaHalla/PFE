<x-master title="AllStusents">
    <style>
        /* CSS for the table */
        body{
            font-family: Roboto, sans-serif;
           min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #ddd; /* Hover background color for table rows */
        }
        .table a {
            text-decoration: none; /* Remove underline from links */
            margin-right: 5px; /* Add margin between link buttons */
        }
        .delete {
            color: red; /* Change color for delete link */
        }
        .modify {
            color: blue; /* Change color for modify link */
        }
    </style>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ date('Y-m-d', strtotime($student->DateDeNaissance)) }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a class="delete" href="{{ route('user.delete', ['id' => $student->id]) }}">Delete</a>
                        <a class="modify" href="{{ route('user.edit', ['id' => $student->id]) }}">Modify</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-master>
