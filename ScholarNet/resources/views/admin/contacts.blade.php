<x-master title="All Contacts">
    <style>
        /* CSS for the table */
        body {
            font-family: Roboto, sans-serif;
            background-color: #EFEFEF;
        }

        .container {
            min-height: 20vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px; /* Add padding for better spacing */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 9px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
        }

        .table a {
            text-decoration: none;
            margin-right: px;
        }

        /* Adjust message column width and allow text wrapping */
        .table td:nth-child(5) {
            max-width: 200px; /* Adjust the maximum width as needed */
            word-wrap: break-word;
        }
    </style>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->fname }}</td>
                    <td>{{ $contact->lname }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-master>
