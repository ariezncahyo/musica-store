@extends('_templates.admin')

@section('title')
	{{ $product->name }}'s Properties
@stop

@section('edit')	
	<h1>Edit Your Product</h1>
	<hr>
	{{ Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true, 'class'=>'form-horizontal']) }}
		<fieldset>
        <div class="control-group">
        	{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('name', $product->name) }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('category_id', 'Select Category', ['class'=>'control-label']) }}
			<div class="controls">
				{{ Form::select('category_id', Category::dropdown(), $product->category_id) }}
			</div>
        </div>

        <div class="control-group">
        	{{ Form::label('description', 'Description', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::textarea('description', $product->description, ['class'=>'input-xxlarge','rows'=>'5']) }}
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('brand', 'Brand', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('brand', $product->brand) }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('price', 'Price', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('price', $product->price) }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('qty', 'Qty in Stock', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('qty', $product->qty) }}
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
        	{{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
        </div>
      </fieldset>
	{{ Form::close() }}
@stop