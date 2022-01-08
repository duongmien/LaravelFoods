@extends('admin_layout')
@section('admin_content')
<?php
use Illuminate\Support\Facades\Session;
$message = Session::get('message');
if($message){

echo '<script>alert("'.$message.'");</script> ';
    Session::put('message',null);
}
?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Product
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-product')}}" method="POST" enctype="multipart/form-data">
                        @csrf   
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product Category</label>
                            <select name="product_category" class="form-control input-sm m-bot15">
                                @foreach($category_product as $key => $cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Description</label>
                            <textarea style="resize: none;" rows="3" type="text" name="product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả Product"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ration</label>
                            <textarea style="resize: none;" rows="3" type="text" name="product_meal" class="form-control" id="exampleInputPassword1" placeholder="Khẩu phần"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Detail</label>
                            <textarea style="resize: none;" rows="5" type="text" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Nội dung Product"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Show/Hide</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Add Product</button>
                    </form>
                    </div>

                </div>
            </section>
    </div>
</div>
@endsection