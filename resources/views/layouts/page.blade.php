<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <!-- AOS Animate On Scroll Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Title -->
    <title>Card</title>

    <!--Styles-->
    <link href="{{asset('css/cards/style.css')}}" rel="stylesheet">
    <link href="{{asset('freeawesome/css/all.min.css')}}" rel="stylesheet">

  </head>
  <body>
      
    {{$slot}}


    
    <!-- bootstrap -->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- AOS Animate On Scroll Library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 120,
        delay: 700,
        duration: 900,
        easing: 'ease'
    });
  </script>
    
  </body>
</html>