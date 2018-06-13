<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <title>@yield('page_title')</title>
   </head>
   <body>
      <header class="container-fluid">
         <div class="row top_bar">
            <div class="col align-self-center">
               50% on all men's glasses for a limited time
            </div>
            <div class="col text-right align-self-center">
               <span><a class="top_bar menu_itms" href="#">Log in or create account</a></span>
               <span><a class="top_bar menu_itms" href="#">Cart</a></span>
               <button type="button" name="button"><i class="fas fa-search"></i></button>
               <input type="search" name="" value="">
            </div>
         </div>
         <div class="container">
            <div class="row logo_bar">
               <div id="logo_img" class="col-4">
                  <img class="align-self-center" src="img/logo.png" alt="">
               </div>
               <div id="shop_menu" class="col-md-8 align-self-center text-right">
                  <span><a class="menu_itms" href="#">Home</a></span>
                  <span><a class="menu_itms" href="#">Man</a></span>
                  <span><a class="menu_itms" href="#">Woman</a></span>
                  <span><a class="menu_itms" href="#">Accessories</a></span>
               </div>
            </div>
         </div>
      </header>
      <main class="container">
         @yield('main_cnt')
      </main>
      <footer class="container">
         <div id="footer_row" class="row">
            <div class="col-12 text-center">
               Footer temporaneo
            </div>
         </div>
      </footer>
   </body>
</html>
