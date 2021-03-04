<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>検索画面</title>
  </head>
  <body class="body">
    <header>
      <h1><span>潤滑油管理</span><span>システム</span></h1>
    </header>
    <div class="title">
      <h2>商品名を入力してください</h2>
    </div>
    <form method="post" action="result">
      @csrf
      <input type="text" name="name">
      <input type="submit" value="検索">
    </form>
    <div>
      <a href="http://localhost:8000/top" class="btn top">TOPに戻る</a>
    </div>
  </body>
</html>
