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
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Product List
        </div>
        <div class="row w3-res-tb">
            
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Product Image</th>
                        <th>Category</th>
                        <th>Sold</th>
                        <th>Show/Hide</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($all_product as $key => $pro)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox"
                                    name="post[]"><i></i></label></td>
                        <td><?php echo $i++; ?></td>
                        <td>{{$pro->product_name}}</td>
                        <td>{{$pro->product_price}}</td>
                        <td><img src="uploads/product/{{$pro->product_image}}" height="80" width="80"/></td>
                        <td>{{$pro->category_name}}</td>
                        <td>{{$pro->product_sold}}</td>

                        <td><span class="text-ellipsis">
                            <?php
                            if($pro->product_status==0){
                            ?>
                                <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                            <?php    
                            }else{
                            ?>
                                <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                            <?php
                            }
                            ?>
                        </span></td>
                        <td>
                            <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">    
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection