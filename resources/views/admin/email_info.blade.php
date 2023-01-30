<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

</head>
<body>
<div class="container-scroller">

@include('admin.sidebar')

@include('admin.header')


    <div class="container-fluid page-body-wrapper">
        <div class="container">
            @if(session()->has('message'))
                <h1 class="alert alert-success">{{ session()->get('message') }}</h1>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="fs-3 text-center mt-5 mb-2">Send Email to {{ $order->email }}</h1>
                    <form action="{{ url('send_user_email', $order->id) }}" method="Post">
                        @csrf
                        <div class="mb-3">
                            <label for="greeting" class="form-label">Email Greeting</label>
                            <input type="text" name="one" class="form-control bg-white text-black" id="greeting" placeholder="Write a email greeting" required>
                        </div>
                        <div class="mb-3">
                            <label for="firstline" class="form-label">Email Firstline</label>
                            <input type="text" name="two" class="form-control bg-white text-black" id="firstline" placeholder="Write a email firstline" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Email body</label>
                            <input type="text" name="three" class="form-control bg-white text-black" id="body" placeholder="Write a email body" required>
                        </div>
                        <div class="mb-3">
                            <label for="button" class="form-label">Email button name</label>
                            <input type="text" name="four" class="form-control bg-white text-black" id="price" placeholder="Write a email button name" required>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Email url</label>
                            <input type="text" name="five" class="form-control bg-white text-black" id="url" placeholder="Write a email url" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastline" class="form-label">Email lastline</label>
                            <input type="text" name="six" class="form-control bg-white text-black" id="lastline" placeholder="Write a email lastline" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


@include('admin.script')

</body>
</html>
