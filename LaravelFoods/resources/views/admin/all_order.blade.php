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
<div class="table-agile-info" id="orderCall">
    <div class="panel panel-default orderLoad" >
        <div class="panel-heading">
            Danh sách đơn hàng
        </div>
        <div class="table-responsive ">
            <table class="table table-striped b-t b-light" >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody >
                    <?php $i=1 ?>
                    @foreach($all_order as $key => $ord)
                    <tr class="orderpage">
                        <td><?php echo $i++; ?></td>
                        <td>{{$ord->shipping_name}}</td>
                        <td>{{$ord->order_total}}</td>
                        <td>{{$ord->shipping_address}}</td>
                        <td>{{$ord->shipping_phone}}</td>
                        <td>{{$ord->date}}</td>

                        <td>{{$ord->order_status}}</td>
                        <td>
                            <input type="hidden" class="order_id" value="{{$ord->order_id}}">
                            <a href="{{URL::to('/detail-order/'.$ord->order_id)}}" class="btn btn-success  ">Xem chi tiết</a>
                            <button type="button" class="btn btn-danger delete-order">Xóa</button>
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