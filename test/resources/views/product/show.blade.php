<html>
<head>
	<title>index.blade.php</title>
    </head>
    <body>
    	<div>
    	   <table>
    	    <th>ID</th>
    	    <th>Product</th>
    	    <th>Price</th>

    	    <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product}}</td>
            <td>{{$product->price}}</td>
            </tr>

    	   </table>
    	</div>
</body>

</html>
