<x-master title="Contact Details">
    <head>
        <style>
            /* CSS styles for Contact Details page */
            body {
                font-family: Arial, sans-serif;
                background-color: #f9fafb;
                margin: 0;
                padding: 0;
            }

            .center-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .card-list {
                width: 90%;
                max-width: 900px;
            }

            .card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 80px; /* Increased padding to increase height */
                position: relative; /* Add relative positioning */
            }

            h1 {
                font-size: 24px;
                color: #333;
                margin-bottom: 20px;
                text-align: center;
            }

            p {
                font-size: 16px;
                color: #666;
                margin-bottom: 10px;
            }

            strong {
                font-weight: bold;
            }

            .message-container {
                border: 1px solid #242323;
                border-radius: 5px;
                padding: 10px;
            }

            /* Adjust position of Created At */
            .created-at {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 14px;
                color: #999;
            }

            /* Adjust position of Email */

        </style>
    </head>
    <body>
        <div class="center-container">
            <div class="card-list">
                <article class="card">
                    <h1>{{ $contact->fname }}  {{ $contact->lname }}</h1>

                    <p></p>
                    <p class="email"><strong>Email:</strong>{{ $contact->email }}</p>
                    <p><strong>Subject:</strong> {{ $contact->subject }}</p>
                    <div class="message-container">
                        <p><strong>Message:</strong></p>
                        <p>{{ $contact->message }}</p>
                    </div>
                    <!-- Move Created At to the top right -->
                    <p class="created-at"> {{ $contact->created_at }}</p>
                </article>
            </div>
        </div>
    </body>
</x-master>
