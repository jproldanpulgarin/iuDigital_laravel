<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Proyecto IuDigital</title>
</head>
<body>
    @include('dashboard.partials.navbar')
      <div class="container">
          <div class="jumbotron">
            @include('dashboard.partials.status')
            @yield('content')
            
          </div>
              
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>