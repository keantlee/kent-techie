@extends('layouts.template')

@section('contents')
    @include('components.carousel.game_carousel')
    <div class="container product-container">
        <div class="row filter-nav-tab">
            <div class="col-md-12">
                @include('layouts.product_navbar')
            </div>
        </div>
        <div class="row product-cards">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top product-card-img" src="/images/console/Ghost-of-tsushima.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Ghost of Tsushima</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;2,695.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top product-card-img" src="/images/console/tlouII.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">The Last of Us Part II</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;2,995.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top product-card-img" src="/images/console/AC.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Assassin's Creed Odyssey</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;1,395.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top product-card-img" src="/images/console/daysgone.jpeg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Days Gone</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;1,295.00</strong></p>
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
                    <img class="card-img-top product-card-img" src="/images/console/AOT2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Attack on Titan 2</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;1.795.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top product-card-img" src="/images/console/witcher 3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">The Witcher Wild Hunt</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;2,495.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top product-card-img" src="/images/console/ACvalhalla.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Assassin's Creed Valhalla</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;2,490.00</strong></p>
                      <div class="details-btn text-center">
                          <a href="#" class="btn btn-primary btn-block">View Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img class="card-img-top product-card-img" src="/images/console/nba2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">NBA 2k21</h5>
                      <p class="card-text"><strong class="text-primary">&#8369;2,499.99</strong></p>
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