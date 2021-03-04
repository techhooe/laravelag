<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>検索画面</title>
<link rel="stylesheet" href="/css/search.css">
</head>
<body>
<fieldset>
<legend>商品名を入力してください</legend>
<form method="post" action="result">
  @csrf
<input type="text" name="name">
<br><input type="submit" value="検索">
</form>
</fleldset>
</body>
</html>
