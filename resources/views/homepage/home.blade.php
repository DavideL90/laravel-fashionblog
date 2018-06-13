@extends('layouts.general')

@section('page_title')
   Homepage
@endsection

@section('main_cnt')
   <div class="row clothes_cnt">

      @foreach ($products as $product)
         <div class="col-lg-3 products_infos">
            <a href="{{route('info', $product['id'])}}">
               <img class="img-fluid" src="{{$product['image']}}" alt="">
               <p class="name_prod">{{$product['name']}}</p>
               <p>{{$product['brand']}}</p>
               <p>{{$product['price']}}</p>
            </a>
         </div>

      @endforeach

   </div>
@endsection

{{-- <a href="{{route('card-detail', ['id' => $product['id']])}}"> --}}
