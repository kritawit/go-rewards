@extends('layouts.app')
@section('content')
<button class="btn btn-success">Add</button>
<a href="employee/import" class="btn btn-info">Import</a>
<button class="btn btn-warning">Export</button>
<hr>
@if(Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong>{!! Session::get('success') !!}
  </div>
@endif
	<table class="table table-striped table-hover datatables">
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
              <td><a href="#">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop