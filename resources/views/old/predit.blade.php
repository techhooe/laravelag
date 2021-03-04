<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>submit</title>
<style>
.submit{
    margin-left:180px;
}
</style>
</head>
<body >
<form action="/edit" method="post">
        @csrf
<p>潤滑油名を入力してください</p>
<p>潤滑油名: <input type="text" name="predit" ></p>
<p class="submit"><input type="submit" value="送信" ></p>
</form>
</body>
</html>
