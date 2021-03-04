<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>潤滑油一覧</title>
  </head>
  <body class="body">
    <header>
      <h1><span>潤滑油管理</span><span>システム</span></h1>
    </header>
    <div>
      <table border="2" cellpadding="3">
        <tr><th>潤滑油一覧</th></tr>
          @foreach($items as $item)
            <tr>
              <td><a href="http://localhost:8000/product?id={{$item->id}}">{{$item->name}}</a></td>
            </tr>
          @endforeach
      </table>
    {{$items->links()}}
    </div>
    <div class="back">
      <a href="http://localhost:8000/top" class="btn top">TOPに戻る</a>
    </div>
  </body>
</html>
