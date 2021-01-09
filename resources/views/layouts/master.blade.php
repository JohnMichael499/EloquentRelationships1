<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eloquent Relationships 1</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .card {
            width: 500px;
            margin: auto;
        }
    </style>
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container ">
            <a id="logo-container" href="/" class="brand-logo">Fajardo and Fernandez</a>
            <ul class="right hide-on-med-and-down">
                @include('layouts.navigation')

            </ul>

            <!-- Mobile -->
            <ul id="nav-mobile" class="sidenav">
                @include('layouts.navigation')
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
        
    </script>
</body>

</html>