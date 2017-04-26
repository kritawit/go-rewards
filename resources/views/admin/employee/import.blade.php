@extends('layouts.app')
@section('content')
@if(Session::has('error'))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong>{!! Session::get('success') !!}
  </div>
@endif
{!! Form::open(array('url'=>'admin/employee/import','class'=>'form-horizontal','role'=>'form','files' => true)) !!}
  <fieldset>
  <div class="form-group">
          <div class="col-lg-6">
              {!! Form::file('excelfile', null, array('class' => 'form-control')) !!}
          </div>
    </div>
    <div class="form-group">
      <div class="col-md-8">
        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-ok"></span> Import</button>
        <a href="{{url('admin/employee')}}" class="btn btn-default">Back</a>
      </div>
    </div>
</fieldset>
{!! Form::close() !!}
@stop