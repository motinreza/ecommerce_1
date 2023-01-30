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
</head>
<body>
<div class="hero_area">

    @include('home.header')

<div class="row justify-content-center my-5">
    <div class="col-md-6">

        @if(session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif

        <h3 class="fs-3 text-center mb-2" style="font-size: 28px;">Show Cart</h3>
        <table class="table table-bordered">
            <tr>
                <th>Product title</th>
                <th>Product quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php $totalprice = 0; ?>

            @foreach($cart as $cart)
                <tr>
                    <td>{{ $cart->product_title }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>{{ $cart->price }}</td>
                    <td><img style="width: 100px;" src="productimage/{{ $cart->image }}" alt=""></td>
                    <td>
                        <a onclick="return confirm('Are you sure delete this product?')" href="{{ url('remove_cart', $cart->id) }}" class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>

                <?php $totalprice = $totalprice + $cart->price; ?>

            @endforeach
        </table>

        <div class="text-center">
            <h3 style="font-size: 18px;">Total price: {{ $totalprice }}</h3>
        </div>

        <div class="mt-5 text-center">
            <h3 class="mb-2" style="font-size: 20px;">Proceed to order</h3>
            <a href="{{ url('cash_order') }}" class="btn btn-danger">Cash on delivery</a>
            <a href="{{ url('stripe', $totalprice) }}" class="btn btn-danger">Pay using card</a>
        </div>

    </div>
</div>



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
