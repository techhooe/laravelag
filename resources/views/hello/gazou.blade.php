<html>
<h1>画像登録画面</h1>
<form action="/gazou" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" class="form-control" name="image">
    <hr>
    <button class="btn btn-success">登録</button>
</form>
</html>
