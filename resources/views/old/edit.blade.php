<html>
<head>
<style>
.submit{
    margin-left:70px;
}
</style>
</head>

<form action="/update" method="post">
<table>
 @csrf
<input type="hidden" name="id" value="{{$item->id}}">
<h3>更新内容を入力してください</h3>
<tr><th>商品名: </th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>
<tr><th>説明: </th><td><input type="text" name="explain" value="{{$item->explain}}"></td></tr>
<tr><th>同等品: </th><td><input type="text" name="same" value="{{$item->same}}"></td></tr>
<tr><th></th><td><input class="submit" type="submit" value="荷姿選択へ"></td></tr>
</table>
</form>
</html>
