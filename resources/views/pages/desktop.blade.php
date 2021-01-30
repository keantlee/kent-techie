@extends('layouts.template')

@section('contents')
    @include('components.carousel.desktop_carousel')
    <div class="container product-container">
        <div class="row filter-nav-tab">
            <div class="col-md-12">
                @include('layouts.product_navbar')
            </div>
        </div>
        <div class="row product-cards">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top product-card-img" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title ">ROG STRIX GL12</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">ROG HURACAN</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nightblade M13 X</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Aegis Ti3 8th</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-cards">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Aspire TC-885</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Predator Orion 9000</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Predator G1</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Alienware area 51</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Recommended Products --}}
        <hr>
        <div class="row">
            <div class="col-md-12">
                <img src="/images/laptop/tuf.png" class="recommended_img_banner" alt="">
            </div>
        </div>
        <div class="row index_product_row mt-5">
            <div class="col-md-12">
              <h2>Recommended just for you</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top product-card-img" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title ">ROG STRIX GL12</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top product-card-img" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title ">ROG STRIX GL12</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top product-card-img" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title ">ROG STRIX GL12</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top product-card-img" src="/images/desktop/rogdesk01.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title ">ROG STRIX GL12</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;50,000.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection