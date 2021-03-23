@extends('layouts.plantilla')

@section('title', 'Mercomax')

@section('contenido')
<div class="wrapper">
    <div class="all-product-grid">
        <div class="container ">
            <div class="col-lg-12">
                <div class="product-top-dt">
                    <div class="product-left-title ">
                        <h2>Vegetables & Fruits</h2>
                    </div>
                </div>
            </div>

            <div class="product-list-view ">
                <div class="row ">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 mt-2">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img  src="../resources/images/product/img-1.jpg" alt="">
                                <div class="product-absolute-options">
                                    <span class="offer-badge-1">6% off</span>
                                    <span class="like-icon" title="wishlist"></span>
                                </div>
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock) </span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$8 <span>$10</span></div>
                                
                            </div>
                            <button id="botones" class="minus minus-btn">AGREGAR</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 mt-2">
                        <div class="product-item mb-30">
                            <a href="single_product_view.html" class="product-img">
                                <img src="../resources/images/product/img-8.jpg" alt="">
                                <div class="product-absolute-options">
                                    <span class="offer-badge-1">3% off</span>
                                    <span class="like-icon" title="wishlist"></span>
                                </div>
                            </a>
                            <div class="product-text-dt">
                                <p>Available<span>(In Stock) </span></p>
                                <h4>Product Title Here</h4>
                                <div class="product-price">$8 <span>$10</span></div>
                                
                            </div>
                            <button id="botones" class="minus minus-btn">AGREGAR</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="more-product-btn">
                            <button class="show-more-btn hover-btn" onclick="window.location.href = '#';">Show More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection