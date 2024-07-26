<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Univeritas Teknologi Bandung </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f4f7f9;
        color: #333;
    }

    .header-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .logout-btn {
        transition: background-color 0.3s;
    }

    .logout-btn:hover {
        background-color: #c82333;
    }

    .footer {
        background-color: #343a40;
        color: white;
        padding: 1rem 0;
        text-align: center;
    }

    hr.bg-primary {
        border-top: 2px solid #007bff;
    }
    </style>
</head>

<body>
    @include('posts.header', ['user' => Auth::user()])
    <div class="container mt-4">
        <div class="row justify-content-center">
            @guest
            <!-- <div class="col-md-12"> -->
            <!-- <div class="text-left mb-4"> -->
            <!-- <h3 class="text-primary header-title">@yield('header-title')</h3> -->
            <!-- </div> -->
            <!-- </div> -->
            @endguest
            @auth
            <div class="col-md-10">
                <div class="text-left mb-4">
                    <h3 class="text-primary header-title">@yield('header-title')</h3>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button type="button" class="btn btn-danger logout-btn"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
            </div>
            @endauth
            <hr class="bg-primary">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
    @include('posts.footer')
</body>

</html>

<!-- Footer text placed here -->
<footer class="bg-light text-center py-3 mt-4">
    <p class="mb-0">@Copyright by_21552011347_Irenius Bonan_TIF RP 221PB</p>
</footer>