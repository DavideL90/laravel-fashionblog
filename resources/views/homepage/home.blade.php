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
   <div class="row">
      <div class="col-md-6">
         <form class="add_element" action="{{route('add')}}" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" value="">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="">
            <label for="image">Image link</label>
            <input type="text" name="image" id="image" value="">
            <textarea name="description" rows="8" cols="80"></textarea>
            <input id="add_input" type="submit" name="" value="Salva">
         </form>
      </div>
   </div>
@endsection
