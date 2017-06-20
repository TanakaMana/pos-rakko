<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ラッコのポスト</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{{asset('/css/base.css')}}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="title" href="/">ラッコのポスト</a>
            <a class="post" href="/posts/create">投稿する</a>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')

  </body>
</html>
