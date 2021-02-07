<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>RFID -  @yield('title')</title>
   
      <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap.min.css')}}">

   </head>
   <body>
      <div class="container">
         @yield('content')
      </div>

      <script src="{{url('/bootstrap/js/bootstrap.min.js')}}"" type="text/js"></script>
 
   </body>
</html>