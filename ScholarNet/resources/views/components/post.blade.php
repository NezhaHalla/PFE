<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        $primary: #ffb535;
        $text-color: #363738;
        body {
            background: #eee;
        }
        .date__box {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #ccc;
            border: 4px solid;
            font-weight: bold;
            padding: 5px 10px;
            .date__day {
                font-size: 22px;
            }
        }
        .blog-card {
            padding: 30px;
            position: relative;
            .date__box {
                opacity: 0;
                transform: scale(0.5);
                transition: 300ms ease-in-out;
            }
            .blog-card__background,
            .card__background--layer {
                z-index: -1;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .blog-card__background {
                padding: 15px;
                background: white;
            }
            .card__background--wrapper {
                height: 100%;
                clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
                position: relative;
                overflow: hidden;
            }
            .card__background--main {
                height: 100%;
                position: relative;
                transition: 300ms ease-in-out;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .card__background--layer {
                z-index: 0;
                opacity: 0;
                background: rgba(#333, 0.9);
                transition: 300ms ease-in-out;
            }
            .blog-card__head {
                height: 300px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .blog-card__info {
                z-index: 10;
                background: white;
                padding: 20px 15px;
                h5 {
                    transition: 300ms ease-in-out;
                }
            }
            &:hover {
                .date__box {
                    opacity: 1;
                    transform: scale(1);
                }
                .card__background--main {
                    transform: scale(1.2) rotate(5deg);
                }
                .card__background--layer {
                    opacity: 1;
                }
                .blog-card__info {
                    h5 {
                        color: $primary;
                    }
                }
            }
        }

        a.icon-link {
            color: $text-color;
            transition: 200ms ease-in-out;
            i {
                color: $primary;
            }
            &:hover {
                color: $primary;
                text-decoration: none;
            }
        }

        .btn {
            background: white;
            color: $text-color;
            font-weight: bold;
            outline: none;
            box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border-radius: 0;
            height: 50px;
            line-height: 50px;
            display: inline-block;
            padding: 0;
            border: none;
            &:focus {
                box-shadow: none;
            }
            &:hover {
                background: $primary;
                color: #fff;
            }
            &.btn--with-icon {
                padding-right: 20px;
                i {
                    padding: 0px 30px 0px 15px;
                    margin-right: 10px;
                    height: 50px;
                    line-height: 50px;
                    vertical-align: bottom;
                    color: white;
                    background: $primary;
                    clip-path: polygon(0 0, 70% 0, 100% 100%, 0% 100%);
                }
            }
            &.btn--only-icon {
                width: 50px;
            }
        }
    </style>
</head>
<body>
@foreach ($publication as $pub)
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <article class="blog-card">
                <div class="blog-card__background">
                    <div class="card__background--wrapper">
                        <div class="card__background--main" style="background-image: url('{{ asset('storage/'.$pub->imagepub)}}');">
                            <div class="card__background--layer"></div>
                        </div>
                    </div>
                </div>
                <div class="blog-card__head">
                    <span class="date__box">
                        <span class="date__day">{{ $pub->created_at->format('d-m-Y') }}</span>
                    </span>
                </div>
                <div class="blog-card__info">
                    <h5>{{ $pub->titre }}</h5>
                    <p>{{ $pub->description }}</p>
                </div>
            </article>
        </div>
        @auth
        @if (auth()->user()->role==='Admin')
            
        @endif
        @endauth
        <form action="{{ route('publication.destroy',$pub->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button onclick="return confirm('are u sure u want to delete this publication ?')" >Delete</button>
        </form>
    </div>
</div>
@endforeach
</body>
</html>
