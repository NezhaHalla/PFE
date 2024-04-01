<x-master title="All Contacts">
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #f9fafb;
            font-size: 70%;
            line-height: 1.4;
            font-family: "Inter", sans-serif;
            color: black;
            font-weight: 400;

            @media only screen and (min-width: 600px) {
                justify-content: center;
                align-items: center;
                display: flex;
                height: 100vh;
                font-size: 100%;
            }
        }

        .container {
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .contact-item {
            cursor: pointer;
            display: table-row;
        }

        .contact-item a {
            text-decoration: none;
            color: black;
            display: table-cell;
        }

        .contact-item:hover {
            background-color: #f0f0f0;
        }

        .contact-details {
            display: none;
            background-color: #ffffff;
            border-radius: 0.5em;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 90%;
            padding: 1em;
            margin-top: 0.5em;
            text-decoration: none;
        }

        .contact-details.active {
            display: block;
        }

        .contact-details .close-button {
            text-align: right;
            text-decoration: none;
        }

        .close-button svg {
            width: 14px;
            height: 14px;
            fill: #000;
        }
    </style>

    <!-- Your content goes here -->
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr class="contact-item">
                    <td>{{ $contact->fname }} {{ $contact->lname }}</td>
                    <td>
                        <a title="show-details" href="{{ route('contacts.show', ['id' => $contact->id]) }}">
                            {{ strlen($contact->message) > 15? substr($contact->message, 0, 15) . '.....' : $contact->message }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-master>
