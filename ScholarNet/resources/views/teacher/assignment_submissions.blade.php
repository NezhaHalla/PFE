<x-master title="Assignment Submissions">
    <style>
        /* CSS for the table */
        body {
            font-family: Roboto, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;

        }
        .container {
            padding-top: 100px; /* Add padding to the top of the container */
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
                    <th>ID</th>
                    <th>Submitted By</th>
                    <th>File</th>
                    <th>Submitted At</th>
                    <th>Note</th> <!-- New column for Note -->
                </tr>
            </thead>
            <tbody>
                @foreach($submissions as $submission)
                    <tr>
                        <td>{{ $submission->id }}</td>
                        <td>{{ $submission->student->name }}</td>
                        <td><a href="{{ route('showdocA', $submission->assignment) }}">{{ $submission->assignment->titre . '.docx' }}</a></td>
                        <td>{{ $submission->created_at->format('Y-m-d H:i:s') }}</td>
                        <td ><form action="{{ route('update_note', ['assignment_id' => $submission->assignment_id, 'student_id' => $submission->student->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="text" name="Note" value="{{ session('oldInput.Note') }}">
                            <button type="submit">Update</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-master>
