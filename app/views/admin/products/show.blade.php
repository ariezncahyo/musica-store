@extends('_templates.admin')

@section('title')
	{{ $product->name }}
@stop

@section('edit')	
	{{ Form::open(array('route' => array('products.destroy', $product->id), 'method' => 'delete')) }}	
		
		<div class="row-fluid">
			<h1>{{ $product->name }}</h1>
 			<div class="span3">
 				<img src="../img/{{ $product->image_path }}" style="width: 156px; height: 450px" />
 			</div>
			<hr/>
			<div class="pull-right">
				<a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a> {{ Form::submit('DELETE', ['class'=>'btn btn-danger']) }} 
				<a href="{{ route('products.edit', ['products' => $product->id]) }}" class="btn btn-primary">Update</a>
			</div>
				<p>Brand : {{ $product->brand }}</p>
				<p>Qty in Stock : {{ $product->qty }}</p>
				<p>Price : Rp. {{ $product->price }}</p>
				<p>Description : {{ $product->description }}</p>
				
				<br />
	{{ Form::close() }}
@stop