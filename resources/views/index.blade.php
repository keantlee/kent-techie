@extends('layouts.template')

@section('contents')
@include('components.carousel.home_carousel')
<div class="container index-container">
  <div class="row index_product_row">
    <div class="col-md-12 text-center">
      <h2>EXPLORE OUR PRODUCTS</h2>
    </div>
  </div>
  <div class="row index_product_row">
    <div class="col-md-6">
      <div class="card index_product_img">
          <img class="card-img" src="/images/desktop/asus-rog-01.jpg" alt="Card image">
          <div class="index-product-img-overlay">
              <div class="card-body">
                  <a href="{{ route('desktop') }}" class="btn btn-outline-primary">View more</a>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card index_product_img">
        <img class="card-img" src="/images/laptop/185NOTEBOOK-GAMING-rev1.jpg" alt="Card image">
        <div class="index-product-img-overlay">
            <div class="card-body">
                <a href="{{ route('laptop') }}" class="btn btn-outline-primary">View more</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row index_product_row">
    <div class="col-md-6">
      <div class="card index_product_img">
          <img class="card-img" src="/images/console/xbox-ps4-and-Nintendo-logos.jpg" alt="Card image">
          <div class="index-product-img-overlay">
              <div class="card-body">
                  <a href="{{ route('console') }}" class="btn btn-outline-primary">View more</a>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card index_product_img">
          <img class="card-img" src="/images/console/gamebanner.jpg" alt="Card image">
          <div class="index-product-img-overlay">
              <div class="card-body">
                  <a href="{{ route('game') }}" class="btn btn-outline-primary">View more</a>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection