<!DOCTYPE html>
<html>
  <head>
    <title>集团客户验证</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
      </div>
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>