<x-master title="My Assignments">
    <div class="ag-format-container">
        <div class="ag-courses_box card-container"> <!-- Added class "card-container" -->
            @foreach($assignments as $assignment)
                <div class="ag-courses_item card"> <!-- Added class "card" -->
                    <a href="#" class="ag-courses-item_link"> <!-- Changed div to anchor -->
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            {{ $assignment->titre }}
                        </div>

                        <div class="ag-courses-item_date-box">
                            <h5 class="card-title">{{ $assignment->titre }}</h5>
                            <p class="card-text"><strong>Deadline:</strong> {{ $assignment->deadline }}</p>

                            <a href="{{ route('assignments.show', ['assignment' => $assignment->id]) }}" class="btn btn-primary">Details</a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-master>

<style>
    /* General styles */
    body {
        background-color: #ffffff;
    }

    .ag-format-container {
        width: 100%;
        max-width: 1142px;
        margin: 0 auto;
    }

    /* Course box styles */
    .ag-courses_box {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        justify-content: space-between;
        padding: 50px 0;
    }

    /* Course item styles */
    .ag-courses_item {
        flex: 1 1 calc(33.33333% - 30px);
        margin: 0 15px 30px;
        overflow: hidden;
        border-radius: 28px;
        position: relative;
    }

    /* Course item link styles */
    .ag-courses-item_link {
        display: flex; /* Use flexbox */
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 30px 20px;
        background-color: #fcfbfb;
        border-radius: 28px;
        text-decoration: none;
        color: #111010;
    }

    .ag-courses-item_link:hover .ag-courses-item_bg {
        transform: scale(10);
    }

    /* Course item background styles */
    .ag-courses-item_bg {
        height: 128px;
        width: 128px;
        background-color: #131846;
        position: absolute;
        top: -75px;
        right: -75px;
        border-radius: 50%;
        transition: all 0.5s ease;
    }

    /* Course item title styles */
    .ag-courses-item_title {
        min-height: 87px;
        margin: 0 0 25px;
        font-weight: bold;
        font-size: 30px;
        line-height: 1.2;
    }

    /* Course item date box styles */
    .ag-courses-item_date-box {
        font-size: 18px;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Course item date styles */
    .ag-courses-item_date {
        font-weight: bold;
        color: #f9b234;
        transition: color 0.5s ease;
    }

    /* Media queries */
    @media only screen and (max-width: 979px) {
        .ag-courses_item {
            flex: 1 1 calc(50% - 30px);
        }

        .ag-courses-item_title {
            font-size: 24px;
        }
    }

    @media only screen and (max-width: 767px) {
        .ag-format-container {
            width: 96%;
        }
    }

    @media only screen and (max-width: 639px) {
        .ag-courses_item {
            flex: 1 1 100%;
        }

        .ag-courses-item_title {
            min-height: 72px;
            font-size: 24px;
            line-height: 1.2;
        }

        .ag-courses-item_link {
            padding: 22px 40px;
        }

        .ag-courses-item_date-box {
            font-size: 16px;
        }
    }
</style>
