@extends('layouts.app')

@section('content')
<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://c8.alamy.com/comp/2EWCC8K/set-of-vector-multicolored-flat-icons-cleaning-and-washing-concept-laundry-and-homework-illustration-isolated-over-white-background-2EWCC8K.jpg" class="d-block w-100" alt="https://c8.alamy.com/comp/2EWCC8K/set-of-vector-multicolored-flat-icons-cleaning-and-washing-concept-laundry-and-homework-illustration-isolated-over-white-background-2EWCC8K.jpg" style="height: 60vh!important">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://c8.alamy.com/comp/2EWCC8K/set-of-vector-multicolored-flat-icons-cleaning-and-washing-concept-laundry-and-homework-illustration-isolated-over-white-background-2EWCC8K.jpg" class="d-block w-100" alt="https://c8.alamy.com/comp/2EWCC8K/set-of-vector-multicolored-flat-icons-cleaning-and-washing-concept-laundry-and-homework-illustration-isolated-over-white-background-2EWCC8K.jpg" style="height: 60vh!important">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://c8.alamy.com/comp/2EWCC8K/set-of-vector-multicolored-flat-icons-cleaning-and-washing-concept-laundry-and-homework-illustration-isolated-over-white-background-2EWCC8K.jpg" class="d-block w-100" alt="https://c8.alamy.com/comp/2EWCC8K/set-of-vector-multicolored-flat-icons-cleaning-and-washing-concept-laundry-and-homework-illustration-isolated-over-white-background-2EWCC8K.jpg" style="height: 60vh!important">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Make your reservation</h1>
            </div>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-label">Check In</span>
                    <input class="form-control" type="date" required>
                  </div>
                  <span class="in-out hidden-xs hidden-sm">&#8652;</span>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-label">Check out</span>
                    <input class="form-control" type="date" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <span class="form-label">No of rooms</span>
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <span class="form-label">Adults</span>
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <span class="form-label">Children</span>
                    <select class="form-control">
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-btn">
                    <button class="submit-btn">Check availability</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container">
  <h1 class="text-center text-success my-5">Services Offered</h1>

  @foreach($categories as $category)
  <div class="row my-2">
    <h2 class="text-dark my-4">{{$category->name}}</h2>
    <hr>
    @foreach($category->service as $service)
    <div class="col-md-4 col-sm-6 mb-2 p-2">
      <div class="card">
        <div class="card-header bg-success text-white text-center">{{$service->name}}</div>
        <div class="card-body text-center">
          {{$service->description}}
          <br>
          <button class="btn btn-success mt-2 mx-auto">Book Now</button>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endforeach


</div>
@endsection