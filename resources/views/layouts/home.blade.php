@extends('teplate')

@section('style')
<link rel="stylesheet" href="{{asset('assest/style/home.css')}}"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('script')
     <script src="{{asset('assest/script/home.js')}}"></script>
     
@endsection

@section('contents')
<div class="slider-container">
  

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="{{ asset('assest/image/slider-1.png')}}" class="d-block w-25" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('assest/image/slider-2.png')}}" class="d-block w-25" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assest/image/slider-3.png')}}" class="d-block w-25" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="false"></span>
    <span class="visually-show">Next</span>
  </button>
</div>
<div class="container">
          <h1>home baby
               
          </h1> 
</div>

<!-- 
<button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>-->
@endsection