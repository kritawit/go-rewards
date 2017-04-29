@extends('layouts.app')
@section('content')
{!! Form::model($employee,array('url'=>'admin/employee/add','class'=>'form-horizontal','role'=>'form')) !!}
<fieldset>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Branch :
        </label>
        <div class="col-lg-6">
            {!! Form::select('branidx', $branch,null, ['placeholder' => 'Select Branch','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Employee ID :
        </label>
        <div class="col-lg-6">
            {!! Form::text('empid',null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Title :
        </label>
        <div class="col-lg-6">
            {!! Form::select('title', ['Mr.'=>'Mr.','Mrs.'=>'Mrs.','Miss'=>'Miss','Ms.'=>'Ms.'],null, ['placeholder' => 'Select Title','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Firstname :
        </label>
        <div class="col-lg-6">
            {!! Form::text('firstname',null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Lastname :
        </label>
        <div class="col-lg-6">
            {!! Form::text('lastname',null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Personal ID :
        </label>
        <div class="col-lg-6">
            {!! Form::text('personalid',null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="">
            Rehire Date :
        </label>
        <div class="col-lg-6">
            {!! Form::date('rehire_date', null,array('class'=>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-6">
            <button class="btn btn-success" type="submit">
                <span class="glyphicon glyphicon-save">
                </span>
                Save
            </button>
            <a class="btn btn-default" href="{{ url('admin/employee') }}">
                Back
            </a>
        </div>
    </div>
</fieldset>
{!! Form::close() !!}
@stop
