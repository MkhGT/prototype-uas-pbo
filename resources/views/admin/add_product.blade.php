<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pl-4 pr-4">
                <label for="title">Product Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group pl-4 pr-4">
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group pl-4 pr-4">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control" required>
            </div>
            <div class="form-group pl-4 pr-4">
                <label for="qty">Quantity</label>
                <input type="number" id="qty" name="qty" class="form-control" required>
            </div>
            <div class="form-group pl-4 pr-4">
                <label for="category">Select Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group pl-4 pr-4">
                <label for="image">Select Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group pl-4">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>