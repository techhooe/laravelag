@extends('layouts.helloapp')



@section('menubar')
 @parent
 インデックスページ
@endsection

@section('content')
 <table>
 <tr><th>検索結果</th></tr>
 @foreach($items as $item)
  <tr>
   <td>{{$item->getData()}}</td>
  </tr>
 @endforeach
 </table>
@endsection

