<html>
@foreach($items as $item)
<p><a href="http://localhost:8000/product/?id={{$item->id}}">{{$item->name}}</a></p>
@endforeach
</html>

