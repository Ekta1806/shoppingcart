<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .div_center{
            text-align: center;
            padding-top:40px
        }
        .h2font{
            font-size: 40px;
        }
        .input_colour{
            color: black
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h2 class="h2font">Add Category</h2>
                <form action="{{route('add_category')}}" method="post">
                    @csrf
                    <input type="text" name="category_name" class="input_colour mt-4" placeholder="Write Category Name">
                    <input type="submit" name="submit" class="btn btn-primary" value="Add Category">    
                </form>
            </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>