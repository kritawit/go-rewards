
@extends('layouts.app')
@section('content')
	<table id="datatable" class="table table-striped table-hover datatables">
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Branch</th>
                <th>Name</th>
                <th>Rehire Date</th>
                <th>Service Year</th>
            </tr>
        </thead>
        <tbody>
          @if(count($reward))
          @foreach($reward as $r)
            <tr class="warning">
              <td>{{$r->empid}}</td>
              <th>{{$r->bucode}}</th>
              <td>{{$r->firstname}} {{$r->lastname}}</td>
              <td>{{$r->rehire_date}}</td>
              <td>{{$r->service_year}}</td>
            </tr>
          @endforeach
          @endif
        </tbody>
    </table>
    
@stop
