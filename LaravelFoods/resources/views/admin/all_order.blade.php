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
            List Order
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
        <div class="table-responsive ">
            <table class="table  _table table_sort  table-striped b-t b-light" >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Customer Name</th>
                        <th>Amount</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Date Oder</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="table_filter">
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
                            <a href="{{URL::to('/detail-order/'.$ord->order_id)}}" class="btn btn-success  ">Detail</a>
                            <button type="button" class="btn btn-danger delete-order">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection