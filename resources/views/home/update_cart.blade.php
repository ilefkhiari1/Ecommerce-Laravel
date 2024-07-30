<!DOCTYPE html>
<html lang="en">
  <head>
  
 
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
   
      <!-- partial -->
     
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{ session()->get('message') }}
    </div>
@endif

@if (isset($cart))
    <div class="div_center">
        <h1 class="font_size">Update</h1>
        <form action="{{ url('/update_cart_confirm') }}" method="post">
            @csrf
            <div class="div_design">
                <label>Product Quantity:</label>
                <input class="text-color" type="number" name="quantity" placeholder="write a quantity" required="" value="{{ $cart->quantity }}">
            </div>
            <div class="div_design">
                <input type="submit" value="Update Product" class="btn btn-primary">
            </div>
        </form>
    </div>

@endif


</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
  </body>
</html>