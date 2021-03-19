@extends('layouts.plantilla')

@section('title', 'Mercomax')

@section('contenido')
<form action="">


<div class="wrapper">   
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-dt-view">
                        <div class="row">
                            @if ($producto->descuento == "" and $producto->precio_descuent == "")
                            <div class="col-lg-4 col-md-4"> 
                                <div class="product-img">
                                    <img style="width:100%; height:250px;" src="data:image/jpg;base64,{{base64_encode($producto->imagen)}}"alt="">
                                    <div class="product-absolute-options">
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </div>   
                                
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="product-group-dt">
                                    <div class="product-dt-right mt-2">
                                        
                                        <div class="pd-no"> <h1> {{$producto->nombre}}</h1> {{$producto->cantidad }} {{$producto->unidad_corto}} </div>
                                        <div class="no-stock mt-5">
                                            <p class="pd-no">Numero de Producto<span> {{$producto->codigo}}</span></p>
                                        </div>
                                    </div>
                                    <div class="main-price  mt-3"><span>$@if($producto->precio < Str::length(3))
                                            {{$predes =Str::substr($producto->precio, 0, -3)}}
                                        @else
                                        {{number_format($producto->precio)}}
                                        @endif</span></div>
                                    <ul class="ordr-crt-share">
                                        <li><button style="width: 200px" id="botones" class="add-cart-btn hover-btn">AGREGAR</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h2>Descripción</h2>
                                <p class="pp-descp">{{$producto->descripcion}} </p>
                            </div>
                            @else
                            <div class="col-lg-4 col-md-4"> 
                                <div class="product-img">
                                    <img style="width:100%; height:250px;" src="data:image/jpg;base64,{{base64_encode($producto->imagen)}}"alt="">
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">{{$producto->descuento}}%</span>
                                        <span class="like-icon" title="wishlist"></span>
                                    </div>
                                </div>   
                                
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="product-group-dt">
                                    <div class="product-dt-right mt-2">
                                        
                                        <div class="pd-no"><h1> {{$producto->nombre}}</h1> {{$producto->cantidad }} {{$producto->unidad_corto}} </div>
                                        <div class="no-stock mt-5">
                                            <p class="pd-no">Numero de Producto<span> {{$producto->codigo}}</span></p>
                                        </div>
                                    </div>
                                    
                                    <ul class="mt-3">
                                        <li><div class="main-price color-discount">Ahora<span>$@if($producto->precio_descuento < Str::length(3)){{$predes =Str::substr($producto->precio_descuento, 0, -3)}}@else{{number_format($producto->precio_descuento)}}@endif</span></div></li>
                                        <li><div class="main-price mrp-price">Antes<span>$@if($producto->precio < Str::length(3)){{$prec =Str::substr($producto->precio, 0, -3)}}@else{{number_format($producto->precio)}}@endif</span></div></li>
                                    </ul>
                                    
                                    <ul class="ordr-crt-share">
                                        <li><button style="width: 200px" id="botones" class="add-cart-btn hover-btn">AGREGAR</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h2>Descripción</h2>
                                <p class="pp-descp">{{$producto->descripcion}} </p>
                            </div>
                            @endif
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection