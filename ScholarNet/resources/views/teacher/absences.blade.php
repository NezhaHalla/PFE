<form method="POST" action="{{ route('absences.storeBulk') }}">
    @csrf
    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Date</th>
                <th>Absent</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>
                        <input type="date" name="dates[{{ $student->id }}][]" class="form-control" required>
                    </td>
                    <td>
                        <input type="checkbox" name="absent[{{ $student->id }}][]" value="1">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit">Submit</button>
</form>
