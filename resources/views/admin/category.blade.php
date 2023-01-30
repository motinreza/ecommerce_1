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

                <h1 class="fs-3 text-center">Add Category</h1>
                <form action="{{ url('add_category') }}" method="Post">
                    @csrf
                    <div class="mb-3">
                        <label for="category" class="form-label">Category Name</label>
                        <input type="text" name="category" class="form-control bg-white text-black" id="category" placeholder="Category name" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Category</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h1 class="text-center fs-3 mb-3">All Category</h1>
                <table class="table table-bordered text-black bg-light">
                    <tr>
                        <th class="p-2">Category Name</th>
                        <th class="p-2">Action</th>
                    </tr>

                    @foreach($data as $data)
                        <tr>
                            <td class="p-2">{{ $data->category_name }}</td>
                            <td class="p-2">
                                <a onclick="return confirm('Are you sure delete this?')" href="{{ url('delete_category', $data->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>



@include('admin.script')

</body>
</html>
