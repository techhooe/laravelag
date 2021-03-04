<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>削除画面</title>
 <link rel="stylesheet" href="/css/delete.css">
</head>
<body>
  <?php $id=$_GET['id'];?>
  <?php $delete=DB::table('Lubs')->where('id',$id)->first(); ?>
 <fieldset>
  <legend>本当に削除しますか？</legend>
   <form method="post" action="/delete">
     @csrf
    <input type="text" name="name" value="{{$delete->name}}">
    <input type="hidden" name="id" value="{{$delete->id}}">
    <br><input type="submit" value="削除">
   </form>
 <br><a href="http://localhost:8000/top" class="btn top">TOPに戻る</a>
 </fieldset>
</body>
</html>
