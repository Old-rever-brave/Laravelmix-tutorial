<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/style1.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" media="screen" />
</head>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">データベース</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/serverservice" class="nav-link">サーバー</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/frontend" class="nav-link">フレームワーク1</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/backend" class="nav-link">フレームワーク2</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/create" class="nav-link">コメント</a></li>
      <li class="nav-item"><a href="http://127.0.0.1:8000/posts/index" class="nav-link">コメント履歴</a></li>
  </ul>
  </nav>
<body>
<div class="contentWrapper">
        @yield('content')
    </div>
</body>
</html>
