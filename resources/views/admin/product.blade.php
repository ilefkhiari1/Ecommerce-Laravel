<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align:center;
            padding-top:40px;
        }
        .font_size{
           font-size:40px;
            padding-bottom:40px;
        }
        .text_color{
            color:black;
            padding-bottom:20px;
        }
        label{
            display:inline-block;
            width:200px;
        }
        .div_design{
            padding-bottom:15px;
        }
        </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">X

                </button>
                {{session()->get('message')}}
            </div>



            @endif
            <div class="div_center"><h1 class="font_size">Add new product</h1>
            <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data"><!-- pour le file -->
            @csrf
            <div class="div_design">
            <label>Product title:</label>
<input class="text-color"type="text" name="title" placeholder="write a title" required="">
    </div>
    <div class="div_design">
            <label>Product description:</label>
<input class="text-color" type="text" name="description" placeholder="write a description" required="">
    </div>
    <div class="div_design">
            <label>Product Price:</label>
<input class="text-color"type="number" name="price" placeholder="write a price" required="">
    </div>
    <div class="div_design">
            <label>Discount Price:</label>
<input class="text-color"type="number" min="0"name="dis_price" placeholder="write a discount">
    </div>
    <div class="div_design">
            <label>Product Quantity:</label>
<input class="text-color"type="number"  name="quantity" placeholder="write a quantity" required="">
    </div>

    <div class="div_design">
            <label>Product Category:</label>
<select class="text_color" name="category" required="">
    <option value="" selected="">Add a category here</option>
    @foreach ($category as $category)
    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
    @endforeach
</select>
    </div>
    <div class="div_design">
            <label>Product Image Here:</label>
<input type="file" name="image" placeholder="write a title" required="">
    </div>
    <div class="div_design">
            
<input type="submit" value="Add Product" class="btn btn-primary" >
    </div>
    </form>
            
    </div>
</div>
        </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')  
    <!-- End custom js for this page -->
  </body>
</html>