<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style  type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px
        }
        .foun_size{
            font-size: 40px;
            padding-bottom: 40px
        }
        .text_color{
            color: black;
            padding-bottom: 20px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px;
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
                
                @if (session()->has('message'))
                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">x</button>

                    {{session()->get('message')}}
                </div>
                @endif

                <div class="div_center">
                    <h1 class="foun_size">Add Product</h1>

                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="div_design">
                        <label for="">Product Title : </label>
                        <input class = "text_color" type="text" name="title" placeholder="ชื่อสินค้า" required="">
                        </div>

                        <div class="div_design">
                        <label for="">Product Description : </label>
                        <input class = "text_color" type="text" name="description" placeholder="คำอธิบาย" required="">
                        </div>

                        <div class="div_design">
                        <label for="">Product Price : </label>
                        <input class = "text_color" type="number" name="price" placeholder="ราคาสินค้า" required="">
                        </div>

                        <div class="div_design">
                        <label for="">Discount Price : </label>
                        <input class = "text_color" type="number" name="dis_price" placeholder="ส่วนลดถ้านำไปใช้">
                        </div>

                        <div class="div_design">
                        <label for="">Product Quantity : </label>
                        <input class="text_color" type="number" name="quantity" min="0"  placeholder="จำนวนสินค้า" required="">
                        </div>

                        <div class="div_design">
                        <label>Product Catagory : </label>
                        <select class="text_color" name="catagory" required="">  
                            <option value="" selected="">เพิ่มหมวดหมู่</option>

                            @foreach($catagory as $catagory)
                            <option value="{{$catagory->catagory_name}}">
                            {{$catagory->catagory_name}}</option>
                            @endforeach

                        </select>
                        </div>
                        
                        <div class="div_design">
                        <label for="">Product Image Here : </label>
                        <input type="file" name="image" required="">
                        </div>

                        <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>