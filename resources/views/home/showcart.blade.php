<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famos</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }

        th {
            background: rgb(247,68,78);
            color:white;
        }

        .th_deg {

        }

    </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')

        @if(session()->has('message'))

         <div class="alert rounded-0" style="background: wheat">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

         </div>
         @endif

    

      <div class="center table">

      <table>

      <tr>
        <th class="th_deg">Product title</th>
        <th class="th_deg">Product quantity</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Action</th>

      </tr>

      <?php $totalprice=0; ?>

      @foreach($cart as $cart)

      <tr>
        <td><i><b>{{$cart->product_title}}</b></i></td>
        <td>{{$cart->quantity}}</td>
        <td>₱{{$cart->price}}</td>
        <td><img class="img img-fluid col-lg-6" src="/product/{{$cart->image}}"></td>
        <td><a class="btn" onclick="return confirm('Are you sure to remove this product?')" href="{{url('remove_cart', $cart->id)}}">Remove Product</a></td>

      </tr>

      <?php $totalprice=$totalprice + $cart->price ?>

      @endforeach


      </table>

      <div>

      <h3 class="p-4">Total Price : ₱{{$totalprice}}</h3>

      </div>

      <div>

      <h5>Proceed to Order</h5>

      <a href="{{url('cash_order')}}" class="btn rounded-0 my-1 mx-2" style="border: .1px solid grey">Cash On Delivery</a>

      <a href="" class="btn rounded-0 my-1 mx-2" style="border: .1px solid grey">Pay Using Card</a>


      </div>

      </div>


      <!-- footer start -->

      


      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="">Something</a><br>
         
            Distributed By <a href="" target="_blank">Someone</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>