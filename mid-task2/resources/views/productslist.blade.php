@extends('navbar')
@section('content')

<h1>All products</h1>

<table>
	<tr>
		<th>Product Name</th>
		<th>Product Quantity</th>
		<th>Manufactured Date</th>
		<th>Expired Date</th>
	</tr>
	@foreach ($products as $p1)
    <tr>
    	<td><a >{{$p1->productname}}</a></td>
	    <td>{{$p1->productquantity}}</td> 
	    <td>{{$p1->manufactureddate}}</td>
	    <td>{{$p1->expireddate}}</td>
    </tr>
	

	@endforeach
</table>

@endsection