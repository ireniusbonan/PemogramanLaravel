<!DOCTYPE html>
<html>

<head>
    <title>My Blog</title>
    <!-- Add your CSS links and other head elements here -->
</head>

<body>
    @include('posts.header')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    @include('posts.footer')
</body>

</html>