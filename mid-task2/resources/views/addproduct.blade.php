@extends('navbar')
@section('content')

<form action="" method="POST">
	{{@csrf_field()}}
	<table>
		<tr>
			<td>Product Name</td>
			<td>
				<input type="text" name="product_name" value="{{old('product_name')}}"><br>
				@error('product_name')
		        <span class="text-danger">{{$message}}</span><br>
		    	@enderror
			</td>

		</tr>
		<tr>
			<td>Product Quantity</td>
			<td>
				<input type="text" name="product_quantity" value="{{old('product_quantity')}}"><br>
				@error('product_quantity')
		        <span class="text-danger">{{$message}}</span><br>
		    	@enderror
			</td>
		</tr>
		<tr>
			<td>Manufactured Date</td>
			<td>
				<input type="text" name="manufactured_date" value="{{old('manufactured_date')}}"><br>
				@error('manufactured_date')
		        <span class="text-danger">{{$message}}</span><br>
		    	@enderror
			</td>
		</tr>
		<tr>
			<td>Expired Date</td>
			<td>
				<input type="text" name="expired_date" value="{{old('expired_date')}}"><br>
				@error('expired_date')
		        <span class="text-danger">{{$message}}</span><br>
		    	@enderror
			</td>
		</tr>
		<tr>
			<td><input type="submit"></td>
			<td><input type="reset"></td>
		</tr>
	</table>
</form>

@endsection