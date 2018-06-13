@extends('layouts.general')

@section('page-title')
   Description
@endsection

@section('main_cnt')

   <div class="row details_cnt">
      <div class="col">
         <img src="{{$image}}" alt="">
      </div>
      <div class="col">
         <h3>{{$brand}}</h3>
         <h1>{{$name}}</h1>
         <h3>{{$price}}</h3>
      </div>
   </div>

@endsection
