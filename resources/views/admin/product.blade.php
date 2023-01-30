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
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                @if(session()->has('message'))
                    <h1 class="alert alert-success">{{ session()->get('message') }}</h1>
                @endif

                <h1 class="fs-3 text-center">Add Product</h1>
                <form action="{{ url('add_product') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Product Title</label>
                        <input type="text" name="title" class="form-control bg-white text-black" id="title" placeholder="Write a title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Product Description</label>
                        <input type="text" name="description" class="form-control bg-white text-black" id="description" placeholder="Write a description" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Product Quantity</label>
                        <input type="number" min="0" name="quantity" class="form-control bg-white text-black" id="quantity" placeholder="Write a quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="number" name="price" class="form-control bg-white text-black" id="price" placeholder="Write a price" required>
                    </div>
                    <div class="mb-3">
                        <label for="dis_price" class="form-label">Discount Price</label>
                        <input type="number" name="dis_price" class="form-control bg-white text-black" id="dis_price" placeholder="Write a discount price" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Product Category</label>
                        <select name="category" id="category" class="form-control bg-white text-black" required>
                            <option value="" selected>Select category</option>
                            @foreach($category as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.script')

</body>
</html>
