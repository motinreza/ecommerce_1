<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>

            <form action="{{ url('product_search') }}" method="get" class="form-inline d-flex">
                @csrf
                <input type="text" name="search" placeholder="Search for something.." class="form-control m-0">
                <button class="btn btn-danger rounded-0">Search</button>
            </form>

        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif

        <div class="row">
            @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{ url('product_details', $products->id) }}" class="option1">
                                    Product Details
                                </a>

                                <form action="{{ url('add_cart', $products->id) }}" method="Post">
                                    @csrf
                                    <input type="number" name="quantity" min="1" value="1" class="mb-2">
                                    <input type="submit" value="Add To Cart" class="option3 btn-rounded">
                                </form>

                            </div>
                        </div>
                        <div class="img-box">
                            <img src="productimage/{{ $products->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{ $products->title }}
                            </h5>

                            @if($products->discount_price ==! null)
                                <h6 style="color:red">
                                    <p>Discount price</p>
                                    ${{ $products->discount_price }}
                                </h6>

                                <h6 style="text-decoration: line-through; color:blue">
                                    <p>Price</p>
                                    ${{ $products->price }}
                                </h6>

                            @else
                                <h6 style="color:blue">
                                    <p>Price</p>
                                    ${{ $products->price }}
                                </h6>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row justify-content-center mt-5">
            {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</section>
<!-- end product section -->


















