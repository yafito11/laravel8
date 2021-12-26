@extends('layouts.main')

@section('container')
     <!-- landing page -->
     <div class="container-fluid banner">
        <div class="container banner-content col-lg-6">
          <div class="text-center">
            <p class="fs-2" data-aos="fade-right" data-aos-duration="1000">Selamat Datang di Dream Blog</p>
            <p class="d-none d-sm-block" data-aos="fade-left" data-aos-duration="1000">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero unde velit odio dolorum praesentium sequi voluptates, magnam hic ut nostrum?</p>
          </div>
        </div>
      </div>
    <!-- akhir landing page -->
    <!-- Features -->
    <section id="features" class="mb-4">
      <div class="container-lg mt-4">
        <div class="row">
          <div class="col-md-11 text-center mb-3">
            <h2>You can Do:</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card border-white" style="width: 18rem;">
              <img src="img/network.svg" class="card-img-top" alt="Camping">
              <div class="card-body">
                <h5 class="card-text">Network</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                {{-- <a href="#" class="btn btn-warning mb-3">Get it Now</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-white" style="width: 18rem;">
              <img src="img/tech.svg" class="card-img-top" alt="Camping">
              <div class="card-body">
                <h5 class="card-text">Technology</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                {{-- <a href="#" class="btn btn-warning mb-3">Get it Now</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-white" style="width: 18rem;">
              <img src="img/math.svg" class="card-img-top" alt="Camping">
              <div class="card-body">
                <h5 class="card-text">Mathematics</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                {{-- <a href="#" class="btn btn-warning mb-3">Get it Now</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Features -->
@endsection
