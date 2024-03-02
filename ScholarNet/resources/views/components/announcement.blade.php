
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;
        }

        .slide-container {
            width: 100%;
            padding: 40px 0;
        }

        .slide-content {
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
        }


        .image-content {
            position: relative;
            padding: 25px 0;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: #ffffff;
            border-radius: 25px 25px 0 25px;
            opacity: 0.8;
        }

        .card {
            border-radius: 10%;
            background-color: #FFF;
            width: 320px; /* Increase width for larger image */
        }

        .card-image {
            position: relative;
            height: 180px; /* Increase height for larger image */
            width: 100%;
            overflow: hidden;
        }

        .card-image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
        }

        .name {
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin-bottom: 10px;
        }

        .description {
            font-size: 14px;
            color: #707070;
            text-align: center;
            margin-bottom: 20px;
        }

        .button {
            border: none;
            font-size: 16px;
            color: #FFF;
            padding: 8px 16px;
            background-color: #f44040;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #f22626;
        }

        .swiper-navBtn {
            color: #6E93f7;
            font-size: 35px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 10;
        }

        .swiper-button-next {
            right: 10px;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-pagination {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #6E93f7;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            background-color: #4070F4;
        }

        @media screen and (max-width: 768px) {
            .slide-content {
                margin: 0 10px;
            }
            .swiper-navBtn {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            @foreach ($announcement as $announce)
                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay"></div>
                        <div class="card-image">
                            @if (!empty($announce->imagepub))
                                <img src="{{ asset('storage/'.$announce->imagepub) }}" alt="" class="card-img">
                            @endif
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">{{ $announce->titre }}</h2>
                        <p class="description">{{ $announce->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        centerSlide: true,
        fade: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 4,
            },
        },
    });
</script>
</body>
</html>
