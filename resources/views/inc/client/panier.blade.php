
    
        <span class="title">Shopping Cart</span>
        @php
          $i=0;  
          $prixtot=0;
          $prix=0;
        @endphp
        @if($commande)
        @foreach ($commande->lignecommandes as $lc )
        
            @php
            $i++;  
            $prix=$lc->qte*$lc->produit->prix;
            $prixtot=$prixtot+$prix;
          @endphp
        
       
        @endforeach
        @endif
        <div class="wrapper-cartCount">
            <span class="cartCount" data-cart-count="">@php echo ($i); @endphp</span>
            <span>items</span>
        </div>
   
    <div class="halo-sidebar-wrapper CartItemDrop">
        <div class="haloCalculatorShipping">
            <div class="progress progress-free progress-100" data-shipping-progress="">
                <div class="progress_shipping" role="progressbar">
                    <div class="progress-meter" style="width: 60%;">@php echo ($i*10); @endphp%</div>
                </div>
            </div>
            
        </div>
                <table>
                    @if($commande)
                    @foreach ($commande->lignecommandes as $lc )
                       <tr>
                        <td>
                        <a href="#" class="previewCartItem-image">
                            <img src="{{asset('uploads')}}/{{$lc->produit->image}}" width="150" alt="Halo Product">
                        </a>
                        </td>
                         <td>
                            <a href="#" class="previewCartItem-name link-underline">
                                <span class="text"> {{$lc->produit->name}}</span>
                            </a>
                         </td> 
                         <td>  
                            <div class="previewCartItem-change">
                                <div class="previewCartItem-price">
                                    <span class="price">
                                            <span class="money">{{$lc->produit->prix}}DTN</span>
                                    </span>
                                </div>
                                <div class="previewCartItem-qty">
                                    <label class="form-label hiddenLabel" for="upsell-update-395049013412746"></label>
                                    <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                    <input class="form-input quantity" name="quantity" id="upsell-update-395049013412746" data-qtt-id1="quantity39504901341274" value="{{$lc->qte}}" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                    <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                </div>
                            </div>
                         </td>
                         <td>
                        <a href="/client/order/supplignecommande/{{$lc->id}}" class="previewCartItem-remove" data-cart-remove="" data-cart-remove-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Naminos demen dincidunto - Cadetblue / XS / Option 1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                </svg>
                        </a>
                        <td>
                       </tr>
                    @endforeach
                    @endif
                </table>   
                   
                
               
            
            <div class="previewCartInfo">
                <div class="previewCartTotals subTotal clearfix">
                    <div class="item previewCartTotals-label">
                        Subtotal
                    </div>
                    <div class="item previewCartTotals-value">
                        <span class="money">@php echo($prixtot); @endphp DTN</span>
                    </div>
                </div>
                <div class="previewCartAction text-left">
                    <div class="previewCartCheckbox global-checkbox">
                        <input class="global-checkbox--input" type="checkbox" name="sidebar_cart_conditions" id="sidebar_cart_conditions" >
                        <label class="global-checkbox--label form-label--checkbox" for="sidebar_cart_conditions">I agree with the</label>
                        <a href="javascript:void(0)" data-term-condition="">Terms Conditions</a>
                    </div>
                    <div class="previewCartGroup">
                        <button class="button button-1 button-checkout"  disabled="disabled" >Checkout</button>
                        <a class="button button-2 button-view-cart text-center" href="page-cart.html">View Cart</a>
                    </div>
                </div>
            </div>
    </div>   
