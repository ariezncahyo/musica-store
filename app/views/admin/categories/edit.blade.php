@extends('_templates.admin')

@section('title')
	{{ $category->name }}'s Properties
@stop

@section('edit')	
	<h1>Edit A Category</h1>
	<hr>
    {{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT', 'class'=>'form-horizontal']) }}
      <fieldset>
        <div class="control-group">
        	{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
          <div class="controls">
            <div class="input-prepend">
            	{{ Form::text('name', $category->name) }}
            </div>
          </div>
        </div>

        <div class="control-group">
        	{{ Form::label('description', 'Description', ['class'=>'control-label']) }}
          <div class="controls">
          	{{ Form::textarea('description', $category->description, ['class'=>'input-xlarge','rows'=>'5']) }}
          </div>
        </div>

        <div class="form-actions">
        	{{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
        </div>
      </fieldset>
    {{ Form::close() }}
@stop