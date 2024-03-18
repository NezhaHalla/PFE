<x-master title="My Assignments">
    <div class="card-container">
        @foreach($assignments as $assignment)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $assignment->titre }}</h5>
                    <p class="card-text"><strong>Deadline:</strong> {{ $assignment->deadline }}</p>
                    
                    <a href="{{ route('assignments.show', ['assignment' => $assignment->id]) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>
    <style>
        body {
            font-family: Roboto, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;
            padding-top: 60px; /* Adjust as needed */
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
            transition: color 0.3s ease; /* Adding transition effect */
        }

        .btn-primary {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Changing text color on card hover */
        .card:hover .card-text {
            color: #c0bbba; /* Change to desired hover color */
        }
    </style>

    <script>
        // JavaScript to toggle details visibility
        document.addEventListener("DOMContentLoaded", function () {
            const detailsBtns = document.querySelectorAll(".details-btn");
            detailsBtns.forEach(function (btn) {
                btn.addEventListener("click", function () {
                    const details = this.parentElement.querySelector(".details");
                    if (details.style.display === "none") {
                        details.style.display = "block";
                    } else {
                        details.style.display = "none";
                    }
                });
            });
        });
    </script>
</x-master>
