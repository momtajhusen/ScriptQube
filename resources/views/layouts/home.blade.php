@extends('teplate')

@section('style')
<link rel="stylesheet" href="{{asset('assest/style/home.css')}}"> 
@endsection

@section('script')
     
@endsection

@section('contents')
<div class="slider-container">
  <div class="slider">
     <div>
          <button class="btn-primary">Lets Join</button>
     </div>
    <div class="slide "><img src="{{ asset('assest/image/slider-1.png')}}" alt="Image 1"></div>
    <div class="slide"><img src="{{asset('assest/image/slider-2.png')}}" alt="Image 2"></div>
    <div class="slide"><img src="{{asset('assest/image/slider-3.png')}}" alt="Image 3"></div>
    <!-- Add more slides as needed -->
  </div>
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>
@endsection