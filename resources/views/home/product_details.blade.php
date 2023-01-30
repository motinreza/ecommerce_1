<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />

    <style>
        .des_css{
            font-family: Montserrat, sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #0c0c0c;
            line-height: 19px;
        }
    </style>
</head>
<body>
<div class="hero_area">

    @include('home.header')

    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                        <div class="card-body">
                            <img src="productimage/{{ $product->image }}" class="card-img-top" alt="Apple Computer" />
                            <div class=" mt-4">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="text-muted mb-4">{{ $product->category }}</p>
                            </div>
                            <div>

                                @if($product->discount_price ==! null)
                                    <div class="d-flex justify-content-between">
                                        <h6>Price:</h6><span class="text-primary" style="text-decoration: line-through;">${{ $product->price }}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <h6>Discount price:</h6><span class="text-danger">${{ $product->discount_price }}</span>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-between">
                                        <h6>Price:</h6><span class="text-primary">${{ $product->price }}</span>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-between">
                                    <h6>Quantity:</h6><span>{{ $product->quantity }}</span>
                                </div>

                            </div>
                            <div class="mt-3">
                                <p><span class="des_css">Description: </span>{{ $product->description }}</p>
                            </div>
                            <div class="mt-2">

                                <form action="{{ url('add_cart', $product->id) }}" method="Post" class="d-flex justify-content-between">
                                    @csrf
                                    <input type="number" name="quantity" min="1" value="1" class="mb-0">
                                    <input type="submit" value="Add To Cart" class="option3 btn-rounded ml-2">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('home.footer')

<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
