@extends('layouts.plantilla')

@section('title', 'Mercomax')

@section('contenido')
<div class="wrapper">
    <div class="all-product-grid">
        <div class="container ">
            <div class="col-lg-12">
                <div class="product-top-dt">
                    <div class="product-left-title ">
                        <h1><img style=" height:30px; " src="{{asset('../resources/images/category/personal.svg')}} " alt=""> Cuidado personal</h1> 
                    </div>
                </div>
            </div>

            <div class="product-list-view  ">
                <div class="row  ">
                    @foreach ($productos as $key)
                        <div class="col-lg-3 p-2 col-md-4 col-sm-4 col-6 ">
                                <div class="product-item mb-30" >
                                    @if ($key->descuento == "" and $key->precio_descuent == "")
                                        
                                        <a href="{{route('detail', $key)}}" class="product-img">
                                            
                                            <img style=" height:160px;" src="data:image/jpg;base64,{{base64_encode($key->imagen)}}"alt="">
                                            <div class="product-absolute-options">
                                                <span class="like-icon" title="wishlist"></span>
                                            </div>
                                        </a>
                                        <div class="product-text-dt">
                                            <p><span>{{$key->cantidad}}</span> {{$key->unidad_corto}}</p>
                                            <h4>{{$key->nombre}}</h4>
                                            <div class="product-price f-z-15" >$@if($key->precio < Str::length(3)){{$predes =Str::substr($key->precio, 0, -3)}}@else{{number_format($key->precio)}} @endif </div>
                                        </div>
                                        
                                    @else
                                    <a href="{{route('detail', $key)}}" class="product-img">
                                        
                                        <img style=" height:160px;" src="data:image/jpg;base64,{{base64_encode($key->imagen)}}"alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">{{$key->descuento}}%</span>
                                            <span class="like-icon" title="wishlist"></span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p ><span> {{$key->cantidad}}</span> {{$key->unidad_corto}}</p>
                                        <h4>{{$key->nombre}}</h4>
                                        <div id="desc" class="product-price f-z-15">$@if($key->precio_descuento < Str::length(3)){{$predes =Str::substr($key->precio_descuento, 0, -3)}}@else{{number_format($key->precio_descuento)}}@endif<span>$@if($key->precio < Str::length(3)){{$prec =Str::substr($key->precio, 0, -3)}}@else{{number_format($key->precio)}}@endif</span></div>
                                    </div>
                                    @endif
                                    <button id="botones" class="minus minus-btn">AGREGAR</button>
                                </div>
                            
                        </div>
                            
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection