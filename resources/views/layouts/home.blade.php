@extends('teplate')

@section('style')
@endsection

@section('script')     
@endsection

@section('contents')
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assest/image/school baner.jpg')}}" class="d-block w-100 col-12" alt="school baner">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assest/image/school baner.jpg')}}" class="d-block w-100" alt="school baner">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assest/image/school baner.jpg')}}" class="d-block w-100" alt="school baner">
          </div>
        </div>
</div>
<!-- here we start company mission  -->
<div class="container bg-blue">
<div class="row">
            <div class="col-12">
                <button class="btn text-white script-font-family mt-1 text-capitalize" style="font-size: 35px;">
                    Our Mission
                </button>
                <p class="text-white ms-3 text-justify text-capitalize script-font-family" style="font-size: 18px;">
                    Our mission at Script Qube is simple: to empower businesses and institutions with transformative technology solutions that streamline operations, enhance productivity, and drive growth. We strive to be at the forefront of technological advancements, continuously pushing boundaries to provide our clients with the most effective tools to succeed in today's digital age.
                </p>
            </div>

        </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 d-flex justify-content-center" style="height: 300px;">
            <div class="rounded-circle mt-2 bg-blue" style="width: 250px; height: 250px;">
            </div>
        </div>
    </div>
</div>
<div class="container w-100 h-100">
    <div class="row">
        <div class="col-12">
            <p class="text-center display-3" style="font-weight:bold; color:#042954;">Ours Clients</p>
        </div>
     </div>  
        <div class="row">
             <div class="col-md-6 col-12 d-flex justify-content-center">
                     <div class="" style="border:10px solid #042954; width:400px; height:300px;">

                         <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                   <div class="carousel-item active" style="height:250px;">
                                        <img src="{{ asset('assest/image/team-1.jpg')}}" class="d-block w-100 " alt="school-1">
                                   </div>
                                   <div class="carousel-item" style="height:250px;">
                                        <img src="{{ asset('assest/image/team-1.jpg')}}" class="d-block w-100"  alt="schppl-2">
                                   </div>
                                   <div class="carousel-item" style="height:250px;">
                                        <img src="{{ asset('assest/image/team-1.jpg')}}" class="d-block w-100 "alt="school-2">
                                   </div>
                              </div>
                         </div>

                    </div>
        
             </div>
             <div class="col-md-6 col-12 d-flex justify-content-center">
                    <div class="" style="border:10px solid #042954; width:400px; height:300px;">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                   <div class="carousel-item active" style="height:250px;">
                                        <img src="{{ asset('assest/image/team-1.jpg')}}" class="d-block w-100 " alt="school-1">
                                   </div>
                                   <div class="carousel-item" style="height:250px;">
                                        <img src="{{ asset('assest/image/team-1.jpg')}}" class="d-block w-100"  alt="schppl-2">
                                   </div>
                                   <div class="carousel-item" style="height:250px;">
                                        <img src="{{ asset('assest/image/team-1.jpg')}}" class="d-block w-100 "alt="school-2">
                                   </div>
                              </div>
                         </div>

                    </div>
             </div>
          
    </div>
</div>
<!-- here we end company mission  -->
@endsection

