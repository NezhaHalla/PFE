<x-master title="Contact Details">
    <head>
        <link href="{{ asset('css/details.css') }}" rel="stylesheet">
        <style>
            .card {
                background-color: rgb(223, 223, 223); /* Change the background color */
                border-radius: 10px; /* Add border radius for styling */
                padding: 20px; /* Add padding for spacing */
            }

            h1 {
                color: #000; /* Black color */
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;

            }

            p {
                color: #000; /* Black color */
                font-size: 18px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <div class="center-container">
        <div class="card-list">
            <article class="card">
                <h1>Contact Details</h1>
                <p><strong> Name:  </strong>{{ $contact->fname }}</p>
                <p><strong>Last Name:  </strong>{{ $contact->lname }}</p>
                <p><strong>Email: </strong> {{ $contact->email }}</p>
                <p><strong>Subject:  </strong>{{ $contact->subject }}</p>
                <p><strong>Message: </strong> {{ $contact->message }}</p>
                <p><strong>Created At: </strong>{{ $contact->created_at }}</p>
            </article>
        </div>
    </div>
</x-master>
