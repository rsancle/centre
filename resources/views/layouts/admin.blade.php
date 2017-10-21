<html lang="cat">
  <head>

    <title>Centre Moral i Cultural del Poblenou | Més de 100 anys oferint activitats al barri del Poblenou</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">

    <!-- Bootstrap -->
    
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet" type="text/css">
    

  </head>
  <body id="body">
        
      @yield('content')
        
         
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>


  </body>

  

</html>