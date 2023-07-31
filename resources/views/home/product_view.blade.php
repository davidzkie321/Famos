<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <div class="row">
                @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details', $products->id)}}" class="option1 rounded-0">Product Details</a>
                                <form action="{{url('add_cart',$products->id)}}" method="Post">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1"> <!-- Set quantity to 1 for Buy Now -->
                                    <div class="col-md-4">
                                        <input type="submit" value="Quick Add To Cart">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="product/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>{{$products->title}}</h5>
                            @if($products->discount_price!=null)
                            <h6>₱{{$products->discount_price}}</h6>
                            <h6 style="text-decoration: line-through">₱{{$products->price}}</h6>
                            @else
                            <h6>₱{{$products->price}}</h6>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                <span style="padding-top: 20px;">
                    {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
                </span>
            </div>
        </div>
</section>
