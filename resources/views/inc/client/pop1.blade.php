<div class="halo-popup halo-quickshop-popup" data-halo-quickshop-popup id="data-quickshop-popup">
    <div class="halo-popup-wrapper">
        <div class="halo-popup-header customPopup-header">
            <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-notify-popup="" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                </svg>
            </a>
        </div>
       
        <form action="/client/order/addcommande" method="POST">
            @csrf
            <input type="hidden" name="idproduit" value="{{$produit->id}}">  
        <div class="halo-popup-content halo-product-block custom-scrollbar">
            <div class="halo-productView-left">
                <div class="productView-image">
                    <a class="image" href="#">
                        <img src="{{asset('uploads')}}/{{$produit->image}}" alt="Halo Product">
                    </a>
                </div>
            </div>
            <div class="halo-productView-right">
                <a href="#" class="product-title link-underline">
                    <span class="text">(Product {{$produit->id}}) {{$produit->name}} </span>
                </a>
                <div class="card-price price__sale">
                    <div class="price-item price-item--regular">
                        <span class="money ">{{$produit->prix+$produit->prix/4}}</span>
                    </div>
                    <div class="price-item price__last">
                        <span class="money ">{{$produit->prix}} DTN</span>
                    </div>
                </div>
                
                <div class="product-options previewCartAction">
                     
                    <div class="wrapper-action">
                        <div class="previewCartItem-qty">
                            <label class="form-label hiddenLabel" for="upsell-update-395049013412748"></label>
                            <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                            <input class="form-input quantity" name="quantity" id="upsell-update-395049013412748" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                            <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                        </div>
                        <div class="btn-card-action">
                            <button type="submit" name="add" data-btn-quickShop-addtocart class="button button-1 button-ATC button-view-cart text-center1">Add to cart</button>
                        </div>
                    </div>
                </form>  
                    
                    <div class="productView-see-details">
                        <a class="button button-2 button-detail text-center" href="/produit/detaille/{{$produit->id}}">View Full Details</a>
                    </div>
                </div>
            </div>
        </div>
       </form>
    </div>
</div>