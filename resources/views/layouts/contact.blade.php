@extends('teplate')

@section('style')
    
@endsection

@section('script')

@endsection

@section('contents')

<!-- Profile Section -->
<section id="profile" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="text-center mb-4">Company Profile</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet magna et sodales fermentum. Donec sit amet ultrices libero. Vivamus tincidunt ex nec mi interdum, et vulputate nunc fermentum. Nulla facilisi.</p>
        <p>Etiam at ligula vel libero gravida congue. Duis accumsan felis sit amet sapien dapibus, at tincidunt elit feugiat. Suspendisse potenti. In hac habitasse platea dictumst.</p>
      </div>
      <div class="col-lg-6">
        <img src="company-image.jpg" class="img-fluid" alt="Company Image">
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->

@endsection