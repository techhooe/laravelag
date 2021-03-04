<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1”>
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>商品情報</title>
  </head>
  <body class="body">
    <?php $item=DB::table('Lubs')->where('id',$id)->first();?>
    <?php $url=str_replace("public","storage","$item->image")?>
    <header>
      <h1>{{$item->name}}</h1>
    </header>
    <div class="product">
      <img class="image" src="{{$url}}" width="300" height="300">
      <table border="2" cellpadding="3">
        <tr><th>説<br>明</th><td><h2>{{$item->explain}}</h2></td></tr>
        <tr><th>荷<br>姿</th><td><h2>{{$item->packing}}</h2></td></tr>
        <tr><th>同<br>等<br>品</th><td><h2>{{$item->same}}</h2></td></tr>
      </table>
    </div>
    <footer>
      <a href="http://localhost:8000/top" class="btn top"><h3>TOPに戻る</h3></a>
      <a href="http://localhost:8000/update?id={{$item->id}}" class="btn update"><h3>更新</h3></a>
      <a href="http://localhost:8000/delete?id={{$item->id}}" class="btn delete"><h3>削除</h3></a>
    </footer>
  </body>
</html>
