<!DOCTYPE html>
<html lang="en">
<!-- code by webdevtrick ( https://webdevtrick.com ) -->
<html>
<head>
    <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Wholesale</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  <link href="{{ asset('index.css') }}" rel="stylesheet">
  <link href="{{ asset('home.css') }}" rel="stylesheet">
  <script type="text/javascript" src="/js/jquery.min.js"></script>
    
    <title>Data Wholesale</title>
  </head>
  <body>
  
  <div class="content">

 <!--navbar logo-->
    <div class="nav-logo">
      <h1>Logo</h1>
    </div>
    <!--navbar flex to the right-->
    <div class="nav-menu">
     <a href="{{ route('home') }}">Home</a>
      <ul><a href="{{ route('about') }}">About Us</a></ul>
      <ul><a href="{{ route('services') }}">Data</a></ul>
      <ul><a href="{{ route('services') }}">Airtime</a></ul>
      <ul><a href="{{ route('login') }}">Login</a></ul>
      <ul><a href="{{ route('signup') }}">Signup</a></ul>
    </div>
  </div>




 
   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@yield('body')
@include('include.sidebar')
@include('include.footer')


  </body>
</html>
  

