<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ラッコのポスト</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{{asset('/sass/base.scss')}}}" rel="stylesheet" media="screen">
    <link href="{{{asset('/css/custom.css')}}}" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ラッコのポスト</a>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')

  </body>
</html>
