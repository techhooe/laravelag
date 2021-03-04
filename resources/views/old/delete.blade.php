<html>
<head>
<style>
.submit{
    margin-left:148px;
}
</style>
</head>

<body>
<p>本当に削除しますか？</p>
<form action="/delete" method="post">
@csrf
<p>商品名：<input type="text" name="name" ></p>
<div class="submit"><input type="submit" value="削除する"></div>
</body>
</html>
