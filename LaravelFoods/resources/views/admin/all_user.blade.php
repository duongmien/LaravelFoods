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
        User List
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
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Sex</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody id="table_filter">
                    <?php $i=1; ?> 
                    @foreach($all_user as $key => $pro)
                    <tr>
                        
                        <td><?php echo $i++; ?></td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->username}}</td>
                        <td>{{$pro->user_sex}}</td>
                        <td>{{$pro->password}}</td>
                        <td>{{$pro->user_email}}</td>
                        <td>
                            <?php
                                if($pro->role_id==1){
                                    echo "Admin";
                                   
                                }
                                else{
                                    echo ("Customer");
                                }
                            ?>
                        </td>
                        </span></td>
                        <td>
                            <a href="{{URL::to('/edit-user/'.$pro->user_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure you want to delete??')" href="{{URL::to('/delete-user/'.$pro->user_id)}}" class="active styling-edit" ui-toggle-class="">    
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