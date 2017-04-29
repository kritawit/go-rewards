@extends('layouts.app')
@section('content')
<a href="{{ url('admin/employee/add') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add</a>
<a href="{{ url('admin/employee/import') }}" class="btn btn-info"><span class="glyphicon glyphicon-import"></span> Import</a>
<hr>
@if(Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong></strong>{!! Session::get('success') !!}
  </div>
@endif
	<table id="datatable"  class="table table-striped table-hover datatables">
        <thead>
            <tr>
                <th>ID</th>
                <th>Branch</th>
                <th>Employee ID</th>
                <th>Title</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employee as $e)
            <tr class="warning">
              <td>{{$e->empidx}}</td>
              <th>{{$e->bucode}}</th>
              <td>{{$e->empid}}</td>
              <td>{{$e->title}}</td>
              <td>{{$e->firstname}} {{$e->lastname}}</td>
              <td><a href="{{ url('admin/employee/edit',[$e->empidx]) }}" class="btn btn-info">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop