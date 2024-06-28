<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        label {
            display: inline-block;
            width: 200px;
            padding: 20px;
        }

        input[type="text"], input[type="number"], select {
            width: 250px;
            height: 40px;
        }

        textarea {
            width: 400px;
            height: 100px;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2>Update Product</h2>
                <div class="div_deg">
                    <form action="{{ url('edit_product', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $product->title }}">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description">{{ $product->description }}</textarea>
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $product->price }}">
                        </div>
                        <div>
                            <label>Quantity</label>
                            <input type="number" name="quantity" value="{{ $product->quantity }}">
                        </div>
                        <div>
                            <label>Category</label>
                            <select name="category">
                                <option value="{{ $product->category }}">{{ $product->category }}</option>
                                <!-- Add other categories if needed -->
                            </select>
                        </div>
                        <div>
                            <label>Current Image</label>
                            <img width="150" src="/products/{{ $product->image }}" alt="Current Image">
                        </div>
                        <div>
                            <label>New Image</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Update Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script> -->
</body>
</html>
