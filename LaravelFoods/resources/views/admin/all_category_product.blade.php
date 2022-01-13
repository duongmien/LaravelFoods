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
            Category List
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
            <table class="table _table table_sort  table-striped b-t b-light">
                <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Show/Hide</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody id="table_filter">
                    <?php $i=1; ?> 
                    @foreach($all_category_product as $key => $cate_pro)
                    <tr>

                       
                        <td><?php echo $i++; ?></td>
                        <td>{{$cate_pro->category_name}}</td>
                        <td><span class="text-ellipsis">
                            <?php
                            if($cate_pro->category_status==0){
                            ?>
                                <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                            <?php    
                            }else{
                            ?>
                                <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                            <?php
                            }
                            ?>
                        </span></td>
                        <td>
                            <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">    
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