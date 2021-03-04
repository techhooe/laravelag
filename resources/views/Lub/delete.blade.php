<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/delete.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
    function check(){
    var ret=window.confirm('本当に削除しますか？');
    if(!ret){
      return false;
    }
    }
    </script>
    <title>削除画面</title>
  </head>
  <body class="body">
    <?php $id=$_GET['id'];?>
    <?php $delete=DB::table('Lubs')->where('id',$id)->first(); ?>
    <header>
      <h1><span>潤滑油管理</span><span>システム</span></h1>
    </header>
    <div class="title">
      <h2>本当に削除しますか？</h2>
    </div>
    <form method="post" action="/delete">
      @csrf
      <input type="text" name="name" value="{{$delete->name}}">
      <input type="hidden" name="id" value="{{$id}}">
      <input type="submit" value="削除" onclick="return check();">
    </form>
    <div>
      <a href="http://localhost:8000/top" class="btn top">TOPに戻る</a>
    </div>
  </body>
</html>
