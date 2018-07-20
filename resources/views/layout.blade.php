<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>paquetes</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <h1 class="pb-2 mt-4 mb-2 border-bottom text-center">SypSystem</h1>
    <div class="container  mt-4">
      <div class="row">
        <div class="col-md-12">
        </div>

        @yield('content')
      </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>
</html>
