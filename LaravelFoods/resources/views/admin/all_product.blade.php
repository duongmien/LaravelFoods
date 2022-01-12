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
                <h4>Search</h4>
                <div class="input-group">
                <input type="search" oninput="filter_table(this, 'table_filter')" class="form_control"
         placeholder="Filter This Table...">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table   class="table  table-striped _table table_sort b-t b-light">
                <thead>
                    <tr >
                        
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
                <tbody id="table_filter">
                    <?php $i=1 ?>
                    @foreach($all_product as $key => $pro)
                    <tr>
                        
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
        
    </div>
</div>
@endsection