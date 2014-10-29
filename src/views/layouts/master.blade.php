
<html>
    <head>
        <script type="text/javascript" src="{{ asset('/js/jquery-2.1.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery-ui-1.10.4.js') }}"></script>
        {{ HTML::style('/css/bootstrap.min.css') }}
        {{ HTML::style('/css/bootstrap.css') }}

        <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>


        <title>data import module</title>

    </head>
    <body>
        <p>
            @section('menu')
            @show

        </p>
        <div class="container">
            @yield('content')   
        </div>
    </body>

</html>