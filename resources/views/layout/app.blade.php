<html>
    <head>

       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <title>  @yield('title') </title>
       <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>

             body {

                padding: 20px;
             }

        </style>

    </head>
<body>
     <div class="container">

        <main role="main">

            @hasSection('content')

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Styles -->
                <link href="/css/app.css" rel="stylesheet">
            </head>
            <body>

                {{--  <div id="app">
                    @include('flash-message')


                </div>  --}}


                <!-- Scripts -->
                <script src="/js/app.js"></script>

            </body>
            </html>

                @yield('content')
               @endif
          </main>

     </div>


     <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>





     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


@yield('scripts')


</body>
</html>
