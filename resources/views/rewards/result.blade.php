
@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-6">
    <a href="{{ url('reward') }}" class="btn btn-default">Back</a>
  </div>
  <div class="col-lg-6" align="right">
    {!! Form::open(array('url'=>'reward/savelucky','method' => 'post','class'=>'form-horizontal','role'=>'form')) !!}
      {{ csrf_field() }}
          <input type="hidden" name="award" value="{{$award}}">
          @foreach($reward as $r)
            <input type="hidden" name="empid[]" value="{{$r->empid}}"/>
            <input type="hidden" name="bucode[]" value="{{$r->bucode}}"/>
          @endforeach
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Save</button>
  {!! Form::close() !!}
  </div>
</div>
<hr>
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
