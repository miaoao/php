@extends('test')
@section('title','1313100102page')
@endsection
@section('content')
  <table>
   <tr>
     <th>id</th>
     <th>product</th>
     <th>price</th>
     <th>operation</th>
   </tr>
  @foreach($products as $p)
   <tr>
     <td>{{$p->id}}</td>
     <td>{{$p->product}}</td>
     <td>{{$p->price}}</td>
     <td><a href="/product/show/{{$p->id}}">show</a>
         <a href="/product/edit/{{$p->id}}">edit</a>
         <a href="/product/delete/{{$p->id}}">Delete</a>
      </td>
   </tr>
   @endforeach
  </table>
  <a href="/product/edit">create</a>
  @show