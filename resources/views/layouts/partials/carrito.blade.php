
    
<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
    <div class="bs-canvas-header side-cart-header p-3 ">
        <div class="d-inline-block  main-cart-title">Mi carrito<span>(2 artículos)</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <h4>Mercomax Super Market</h4>
                    <span>$34</span>
                </div>
                <div class="cart-total-dil pt-2">
                    <h4>Los gastos de envío</h4>
                    <span>$1</span>
                </div>
            </div>
            <div class="side-cart-items">
                
                    <div class="cart-item">
                        <div class="cart-product-img">
                            <img src="{{ asset('../resources/images/product/img-1.jpg') }} " alt="">
                            <div class="offer-badge">6% OFF</div>
                    </div>
                    <div class="cart-text">
                        <h4>Título del producto aquí</h4>
                        <div class="cart-radio">
                            <ul class="kggrm-now">
                                <li>
                                    <input type="radio" id="a1" name="cart1">
                                    <label for="a1">0.50</label>
                                </li>
                                <li>
                                    <input type="radio" id="a2" name="cart1">
                                    <label for="a2">1kg</label>
                                </li>
                                <li>
                                    <input type="radio" id="a3" name="cart1">
                                    <label for="a3">2kg</label>
                                </li>
                                <li>
                                    <input type="radio" id="a4" name="cart1">
                                    <label for="a4">3kg</label>
                                </li>
                            </ul>
                        </div>
                        <div class="qty-group">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus minus-btn">
                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                <input type="button" value="+" class="plus plus-btn">
                            </div>
                            <div class="cart-item-price">$10 <span>$15</span></div>
                        </div>
                        <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                    </div>
            </div>
        </div>
    </div>
    <div class="bs-canvas-footer">
        <div class="cart-total-dil saving-total ">
            <h4>Ahorro total</h4>
            <span>$11</span>
        </div>
        <div class="main-total-cart">
            <h2>Total</h2>
            <span>$35</span>
        </div>
        <div class="checkout-cart">
            <a href="#" class="promo-code">¿Tienes un código de promoción?</a>
            <a href="#" class="cart-checkout-btn hover-btn">Comprar</a>
        </div>
    </div>
</div>