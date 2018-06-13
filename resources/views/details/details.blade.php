@extends('layouts.general')

@section('page_title')
   Description
@endsection

@section('main_cnt')

   <div class="row details_cnt">
      <div class="col-md-6 picture_cnt">
         <img class="img-fluid" src="{{$image}}" alt="">
      </div>
      <div class="col-md-6 article_desc">
         <h3 id="brand">{{$brand}}</h3>
         <h1 id="name">{{$name}}</h1>
         <h4 id="price">€ {{$price}}</h4>
      </div>
   </div>

@endsection
