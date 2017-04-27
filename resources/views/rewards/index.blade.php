@extends('layouts.app')
@section('content')
<div class="panel panel-info">
  <div class="panel-heading">Reward Form</div>
  <div class="panel-body">
 	@if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    		<strong>Warning!</strong>
    		<ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
			</ul>
  		</div>
	@endif
    {!! Form::open(array('url'=>'reward','method' => 'post','class'=>'form-horizontal','role'=>'form')) !!}
    {{ csrf_field() }}
  	<fieldset>
  	<div class="form-group">
    	<label for="name" class="col-md-4 control-label">Award Name : </label>
        <div class="col-lg-6">
            {!! Form::select('name', $award, null, ['placeholder' => 'Select Award','class' => 'form-control']) !!}
        </div>
    </div>
{{--     <div class="form-group">
    	<label for="name" class="col-md-4 control-label">Monthly</label>
        <div class="col-lg-6">
            {!! Form::select('award', $award, null, ['placeholder' => 'Select Award','class' => 'form-control']) !!}
        </div>
    </div> --}}
    <div class="form-group">
      <label for="" class="col-md-4"></label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Reward</button>
        <input type="reset" class="btn btn-default" />
      </div>
    </div>
	</fieldset>
	{!! Form::close() !!}
  </div>
</div>
@stop