@extends('layouts.app')
@section('content')
{!! Form::open(array('url'=>'admin/employee/add','class'=>'form-horizontal','role'=>'form')) !!}
  <fieldset>
  <div class="form-group">
    <label for=""></label>
          <div class="col-lg-6">
              <input type="text" name="">
          </div>
    </div>
    <div class="form-group">
      <label for="" class="col-md-4"></label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-ok"></span> Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</fieldset>
{!! Form::close() !!}
@stop