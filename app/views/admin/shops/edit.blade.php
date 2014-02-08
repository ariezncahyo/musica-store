@extends('_templates.admin')

@section('title')
	Change Your Store Information
@stop

@section('edit')	
	<h1>Change Your Store Information</h1>
	<hr>
	{{ Form::model($shop, ['route' => ['shops.update', $shop->id], 'method' => 'PUT', 'class'=>'form-horizontal']) }}
		<fieldset>
        <div class="control-group">
        	{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('name', $shop->name) }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('slogan', 'Slogan', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::text('slogan', $shop->slogan) }}
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('address', 'Address', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::textarea('address', $shop->address, ['class'=>'input-xlarge','rows'=>'5']) }}
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('phone', 'Phone', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::text('phone', $shop->phone) }}
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('email', 'Email', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::text('email', $shop->email) }}
          </div>
        </div>

        {{ Form::hidden('id', $shop->id) }}

        <div class="form-actions">
        	{{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
        </div>
      </fieldset>
	{{ Form::close() }}
@stop