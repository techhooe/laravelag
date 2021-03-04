<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/top.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>TOP画面</title>
  </head>
  <body class="body">
    <header>
      <h1><span>潤滑油管理</span><span>システム</span></h1>
    </header>
    <a href={{ route('logout') }} onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        ログアウト
    </a>
    <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
        @csrf
    </form>
    <div class="parent">
      <h2 class="title">&nbsp操作を選んで下さい</h2>
      <a href="http://localhost:8000/catalog" class="btn-square1">一覧</a>
      <a href="http://localhost:8000/search" class="btn-square2">検索</a>
      <a href="http://localhost:8000/add" class="btn-square3">追加</a>
    </div>
</html>
