@extends('layouts.app')
@section('content')
<button class="btn btn-success">Add</button>
<button class="btn btn-info">Import</button>
<button class="btn btn-warning">Export</button>
<hr>
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