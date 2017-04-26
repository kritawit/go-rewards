@extends('layouts.app')
@section('content')
	<table class="table table-striped table-hover datatables">
        <thead>
            <tr>
                <th>ID</th>
                <th>BU CODE</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($branch as $br)
            <tr class="warning">
              <td>{{$br->branidx}}</td>
              <td>{{$br->bucode}}</td>
              <td>{{$br->name}}</td>
              <td><a href="#">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop