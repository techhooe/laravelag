@extends('layouts.helloapp')

@section('title','Lub.Add')

@section('menubar')
 @parent
 潤滑油追加画面
@endsection

@section('content')
  @if(count($errors)>0)
  <div>
     <ul>
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach
     </ul>
  </div>
  @endif
 <form action="/Lub/add" method="post">
 <table>
    @csrf
      <tr><th>商品名: </th><td><input type="text" name="name"></td></tr>
      <tr><th>説明: </th><td><input type="textarea" rows="10" cols="60" name="explain"></textarea></td></tr>
      <tr><th>同等品: </th><td><input type="text" name="same"></td></tr>
      <tr><th></th><td><input type="submit" value="送信"></td></tr>
 </table>
 </form>
@endsection
