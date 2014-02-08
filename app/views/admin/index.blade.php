@extends('_templates.admin')

@section('title')
	Welcome to Admin Page
@stop

<!-- Halama Dashboard -->
@section('dashboard')
	@include('_errors.fails')
	
			@if(Session::has('message'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{{ Session::get('message') }}
				</div>
			@endif
	
	<div class="hero-unit hero-special">
      <h1>Welcome to Admin Panel</h1>
      <hr>
      <h4>Tugas Besar Rekayasa Web!</h4><hr>
		<blockquote>
			<p><cite title="Administrator">Noviyanto Rahmadi</cite> [1015015072]</p>
		</blockquote>
		<hr>
    </div>

    <div class="panel" id="panel-101">
          <header>
            <i class="icon-asterisk"></i>
            <span>Shortcuts</span>
          </header>
          <div class="content tiles-container">
            <a href="#" data-target-page="page-view-category" class="tile-btn"><i class="icon-tag"></i><span>View Categories</span></a>
            <a href="#" data-target-page="page-view-product" class="tile-btn"><i class="icon-download-alt"></i><span>View Products</span></a>
            <a href="#" data-target-page="page-create-category" class="tile-btn"><i class="icon-plus-sign"></i><span>Add Category</span></a>
            <a href="#" data-target-page="page-create-product" class="tile-btn"><i class="icon-plus-sign"></i><span>Add Product</span></a>
            <a href="#" data-target-page="page-store" class="tile-btn"><i class="icon-shopping-cart"></i><span>Configure</span></a>
            <a href="#" data-target-page="page-user" class="tile-btn"><i class="icon-group"></i><span>User</span></a>
          </div>
        </div>


        <div class="row-fluid">

          <div class="span6">

            <div class="panel" id="panel-24">
              <header>
                <i class="icon-bar-chart"></i>
                <span>List Category</span>
              </header>
              <div class="content tiles-container">
                <table id="table3" class="tablesorter">
                  <thead>
                    <tr>
                      <th class="header">Name</th>
                      <th class="header">Description</th>
                    </tr>
                  </thead>
                  <tbody>    
				  	@foreach($categories as $category)
						<tr>
				        	<td>{{ $category->name }}</td>
				        	<td>{{ $category->description }}</td>
				        </tr>
				      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="span6">
            <div class="panel" id="panel-102">
              <header>
                <i class="icon-trophy"></i>
                <span>List Product</span>
              </header>
              <div class="content tiles-container">
                <table id="table4" class="tablesorter">
                  <thead>
                    <tr>
                      <th class="header">Name</th>
                      <th class="header">Brand</th>
                      <th class="header headerSortDown">Stock</th>
                    </tr>
                  </thead>
                  <tbody>    
				  	@foreach($products as $product)
						<tr>
				        	<td>{{ $product->name }}</td>
				        	<td>{{ $product->brand }}</td>
				        	<td align="center">{{ $product->qty }}</td>
				        </tr>
				      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@stop

<!-- Halaman Kategori -->
@section('view-category')
	<div class="hero-unit hero-special">
      	<h2>List Category</h2>
		<table id="table2" class="tablesorter">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th class="header headerSortDown">Name</th>
		        <th class="header">Description</th>
		        <th colspan="2" align="center">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <a style="display: none;">{{ $no = 0 }}</a>
		      @foreach($categories as $category)
		      <a style="display: none;">{{ $no++ }}</a>
		        <tr>
		          <td align='center'>{{ $no }}</td>
		          <td>{{ $category->name }}</td>
		          <td>{{ $category->description }}</td>
		          <td align='center'><a href="{{ route('categories.edit', ['categories' => $category->id]) }}" class="btn btn-primary"><i class="icon-edit icon-white"></i></a></td>
		          {{ Form::open(array('route' => array('categories.destroy', $category->id), 'method' => 'delete')) }}
		          <td align='center'><button class="btn btn-danger" type="submit" style="display: inline;"><i class="icon-trash icon-white"></i></button></td>
		          {{ Form::close() }}
		        </tr>
		      @endforeach
		    </tbody>
		  </table>
    </div>
@stop

@section('create-category')
    <h1>Create A New Category</h1>
    <hr />

    {{ Form::open(['route' => 'categories.store', 'class'=>'form-horizontal']) }}
      <fieldset>
        <div class="control-group">
        	{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('name') }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('description', 'Description', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::textarea('description', NULL, ['class'=>'input-xlarge','rows'=>'5']) }}
          </div>
        </div>

        <div class="form-actions">
        	{{ Form::submit('Create', ['class'=>'btn btn-primary']) }}
        </div>
      </fieldset>
    {{ Form::close() }}	
@stop

<!-- Halaman Produk -->
@section('view-product')
	<div class="hero-unit hero-special">
      	<h2>List Product</h2>
      	<table id="table1" class="tablesorter">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th class="header headerSortDown">Name</th>
		        <th class="header">Brand</th>
		        <th class="header">Qty</th>
		        <th class="header">Price</th>
		        <th colspan="3" align="center">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <a style="display: none;">{{ $no = 0 }}</a>
		      @foreach($products as $product)
		      <a style="display: none;">{{ $no++ }}</a>
		        <tr>
		          <td align="center">{{ $no }}</td>
		          <td>{{ $product->name }}</td>
		          <td>{{ $product->brand }}</td>
		          <td align="center">{{ $product->qty }}</td>
		          <td align="right">Rp. {{ $product->price }}</td>
		          <td align="center"><a href="{{ route('products.show', ['products' => $product->id]) }}" class="btn btn-primary"><i class="icon-check icon-white"></i></a></td>
		          <td align="center"><a href="{{ route('products.edit', ['products' => $product->id]) }}" class="btn btn-primary"><i class="icon-edit icon-white"></i></a></td>
		          {{ Form::open(array('route' => array('products.destroy', $product->id), 'method' => 'delete')) }}
		          <td align="center"><button class="btn btn-danger" type="submit" style="display: inline;"><i class="icon-trash icon-white"></i></button></td>
		          {{ Form::close() }}
		        </tr>
		      @endforeach
		    </tbody>
		  </table>
    </div>
@stop

@section('create-product')
    <h1>Create A New Product</h1>
    <hr />

    {{ Form::open(['route' => 'products.store', 'files' => true, 'class'=>'form-horizontal']) }}
      <fieldset>
        <div class="control-group">
        	{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('name') }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('category_id', 'Select Category', ['class'=>'control-label']) }}
			<div class="controls">
				{{ Form::select('category_id', Category::dropdown()) }}
			</div>
        </div>

        <div class="control-group">
        	{{ Form::label('description', 'Description', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::textarea('description', NULL, ['class'=>'input-xlarge','rows'=>'5']) }}
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('brand', 'Brand', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('brand') }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('price', 'Price', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('price') }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('qty', 'Qty in Stock', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('qty') }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('image', 'Input Image', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::file('image_path') }}
          </div>
        </div>
        <div class="form-actions">
        	{{ Form::submit('Create', ['class'=>'btn btn-primary']) }}
        </div>
      </fieldset>
    {{ Form::close() }}
@stop

@section('user')
    <h1>Change Your Password</h1>
    <hr />
    {{ Form::model($user, ['route' => ['users.update', $user->id = 1], 'method' => 'PUT']) }}
      <fieldset>
        <div class="control-group">
        	{{ Form::label('username', 'Your Username', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('username') }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('password', 'New Password', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::password('password') }}
          </div>
        </div>

        <div class="form-actions">
        	{{ Form::submit('Change', ['class'=>'btn btn-primary']) }}
        </div>
      </fieldset>
    {{ Form::close() }}	
@stop

@section('store')
	<h1>Configure Your Store</h1>
	<hr>
	<div class="alert alert-success">
		<h5>Your currently information :</h5><br/>
		@foreach($shops as $shop)
			<table width="100%">
				<tr> 
					<td> {{ Form::label('name','Name') }}</td>
					<td>: </td>
					<td> {{ $shop->name }} </td>
				</tr>

				<tr> 
					<td> {{ Form::label('slogan','Slogan') }}</td>
					<td>: </td>
					<td> {{ $shop->slogan }} </td>
				</tr>

				<tr> 
					<td> {{ Form::label('address','Address') }}</td>
					<td>: </td>
					<td> {{ $shop->address }} </td>
				</tr>

				<tr> 
					<td> {{ Form::label('phone','Phone') }}</td>
					<td>: </td>
					<td> {{ $shop->phone }} </td>
				</tr>

				<tr> 
					<td> {{ Form::label('email','Email') }}</td>
					<td>: </td>
					<td> {{ $shop->email }} </td>
				</tr>
			 </table>
		@endforeach
	</div>
	<hr>
	<a href="{{ route('shops.edit', ['shops' => $shop->id]) }}" class="btn btn-primary">Change</a>
@stop

