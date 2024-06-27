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
            <h2 class="h5 no-margin-bottom">Categories</h2>
          </div>
        </div>
        <form action="{{ url('add_category') }}" method="POST">
            @csrf
            <div class="form-group pl-4 pr-4">
                <label for="category_name">Category Name</label>
                <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter category name" required>
            </div>
            <div class="form-group pl-4">
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </form>
        <div class="categories container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-bordered mt-4 mx-auto">
                        <tbody>
                            <tr>
                                <th>Category Names</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($data as $category)
                            <tr>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <a href="{{ url('delete_category', $category->id) }}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
      </div>
    </div>
    <!-- JavaScript files-->
    <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal{(
                title : 'Are you wanna delete this data?',
                text : 'Deleting will cause data lost permanently',
                icon : 'warning',
                buttons : true,
                dangerMode : true,
            )}

            .then((willCancel)=>{
                if(willCancel){
                    windows.location.href = urlToRedirect;
                }
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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