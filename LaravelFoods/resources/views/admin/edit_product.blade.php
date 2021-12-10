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
                    Cập nhật sản phẩm
                </header>
                <div class="panel-body">
                    @foreach($edit_product as $key => $edit_value)
                    <div class="position-center">
                        @foreach($edit_product as $key => $pro)
                        <form role="form" action="{{URL::to('/update-product/'.$edit_value->product_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf   
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="{{$pro->product_name}}" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Danh mục sản phẩm</label>
                            <select name="product_category" class="form-control input-sm m-bot15">
                                @foreach($category_product as $key => $cate)
                                    @if($cate->category_id==$pro->category_id)
                                    <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @else
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endif
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input value="{{$pro->product_price}}" type="text" name="product_price" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none;" rows="3" type="text" name="product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả sản phẩm">{{$pro->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Khẩu phần</label>
                            <textarea style="resize: none;" rows="3" type="text" name="product_meal" class="form-control" id="exampleInputPassword1" placeholder="Khẩu phần">{{$pro->product_meal}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea style="resize: none;" rows="5" type="text" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Nội dung sản phẩm">{{$pro->product_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            <img src="{{URL::to('uploads/product/'.$pro->product_image)}}" height="100" width="100">
                        </div>
                        <button type="submit" name="update_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    
                    </form>
                    @endforeach

                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection