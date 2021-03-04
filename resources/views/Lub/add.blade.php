<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>入力画面</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/add.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body class="body">
    <header>
      <h1><span>潤滑油管理</span><span>システム</span></h1>
    </header>
    <h2 class="title"><span>潤滑油情報を</span><span>入力してください</span></h2>
    <form class="add" action="/addConfirm" method="post" enctype="multipart/form-data">
      <table class="form-table">
          @csrf
          <tbody>
            <tr><th>潤滑油名</th>
              <td>
                <input type="text" name="name" value="{{old('name')}}">
                @if($errors->has('name'))
                  <h6 class="valid"><span>※潤滑油名が</span><span>入力されていません</span></h6>
                @endif
              </td>
            </tr>
            <tr><th>商品説明</th>
              <td>
                <textarea name="explain" cols="40" rows="4">{{old('explain')}}</textarea>
                @if($errors->has('explain'))
                  <h6 class="valid"><span>※文字数が</span><span>オーバーしています(300文字以内)</span></h6>
                @endif
              </td>
            </tr>
            <tr><th>同等品</th><td><input type="text" name="same" value="{{old('same')}}"></td></tr>
            <tr><th>荷姿</th><td>
              <input type="checkbox" name="packing[]" value="ペール"@if($errors->any()){{ is_array(old('packing')) && array_keys(old('packing'), "ペール")? 'checked="checked"' : '' }}@endif/>PL
              <input type="checkbox" name="packing[]" value="ドラム"@if($errors->any()){{ is_array(old('packing')) && array_keys(old('packing'), "ドラム")? 'checked="checked"' : '' }}@endif/>DM
              <input type="checkbox" name="packing[]" value="ジャバラ"@if($errors->any()){{ is_array(old('packing')) && array_keys(old('packing'), "ジャバラ")? 'checked="checked"' : '' }}@endif/>JA
              <input type="checkbox" name="packing[]" value="一斗缶"@if($errors->any()){{ is_array(old('packing')) && array_keys(old('packing'), "一斗缶")? 'checked="checked"' : '' }}@endif/>18
            </td></tr>
            <tr><th>画像</th>
              <td>
                <input type="file" name="image">
                @if($errors->has('image'))
                  <h6 class="valid"><span>jpgかpngのみ</span><span>アップロードできます</span></h6>
                @endif
              </td>
            </tr>
        　</tbody>
      </table>
      <div class="submit">
        <input type="submit" value="追加する">
      </div>
    </form>
    <div class="back">
      <a href="http://localhost:8000/top" class="btn top">TOPに戻る</a>
    </div>
  </body>
</html>
