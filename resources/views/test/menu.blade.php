<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <a href="">照会処理</a><br />
    <a href="">更新処理</a>
</body>
</html>

<a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf
