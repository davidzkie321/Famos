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
      <style>
        .codeLucky {
            font-size: large;
            
        }
    </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')

        
         <!-- slider section -->
        @include('home.slider')
    
      </div>
      <!-- why section -->
        @include('home.why')

      <!-- arrival section -->
        @include('home.new_arrival')


      <!-- product section -->
      @include('home.product')

 
      <!-- subscribe section -->
      @include('home.subscribe')

      <!-- client section -->
      @include('home.client')

      <!-- footer start -->
      @include('home.footer')
      


      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="">Something</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">Someone</a>
         
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