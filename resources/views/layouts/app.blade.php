<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Persons APP</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/people.png') }}" />

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

        <!-- Fontello icons -->
        <link href="{{ asset('css/fontello/css/fontello.css') }}" rel="stylesheet" />

        <!-- Core CSS -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        <!-- Responsive CSS -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="(max-width: 767px)" >
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="logo">
                    <img class="logo-img" src="{{ asset('assets/people.png') }}" alt="People">
                    <h2 class="logo-text">Persons</h2>
                </div>
            </div>
        </header>

        @yield('content')

        <!-- Footer -->
        <footer>
            <div class="container">
                <p class="text-center">Copyright &copy; Persons APP 2023</p>
            </div>
        </footer>
    </body>
</html>
