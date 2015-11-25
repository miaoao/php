<html>
<head>
	<title>edit.blade.php</title>
</head>
<body>
	<div>
	<form action="/product/save/{{$product['id']}}" >
       id:<input name="id" value="{{$product['id']}}"/><br>
       Product:<input name="title" value="{{$product['product']}}"/><br>
       Price:<input name="content" value="{{$product['price']}}"/><br>
       <input type="submit" value="保存"/>
	</form>
	</div>
</body>
</html>
