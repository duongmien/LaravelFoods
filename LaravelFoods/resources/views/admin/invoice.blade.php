
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Food</title>
    <link rel="icon" type="png" href="{{asset('frontend/assets/img/favicon.png')}}">

</head>
<body>
<style>
    body{
        font-family: DejaVu Sans;
    }
</style>
<img src="{{URL::to('img/logo-black.png')}}"  width="300px"  alt="Image">
<h2>LaravelFood</h2>
<h4>48 Cao Thắng, phường Thanh Bình, quận Hải Châu, thành phố Đà Nẵng</h4>
<h4>SDT: 0987456123</h4>
<h1>Hóa đơn đặt hàng</h1>
<h3>HD00182</h3>
<table>
    <tr>
        <th>Thời gian đặt</th>
        <td>{{$order[0]->date}}</td>
    </tr>
    <tr>
        <th>Người duyệt</th>
        <td>admin</td>
    </tr>
</table>

<h2>Thông tin khách hàng</h2>
<table>
    <tr>
        <th>Tên khách hàng</th>
        <td>{{$order[0]->shipping_name}}</td>
    </tr>
    <tr>
        <th>Địa chỉ</th>
        <td>{{$order[0]->shipping_address}}</td>
    </tr>
    <tr>
        <th>SDT</th>
        <td>{{$order[0]->shipping_phone}}</td>
    </tr>
</table><table>
<tr>
    <th>Email</th>
    <td>{{$order[0]->shipping_email}}</td>
</tr>
<tr>
    <th>Hình thức thanh toán</th>
    <td>{{$order[0]->payment_method}}</td>
</tr>
<tr>
    <th>Ngày đặt</th>
    <td>{{$order[0]->date}}</td>
</tr>
</table>

<h2>Liệt kê chi tiết đơn hàng</h2>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        @php
            $total = 0;
        @endphp
        @foreach($listfood as $key => $fo)
        @php
            $subtotal = $fo->product_price * $fo->product_sales_quantity;
            $total += $subtotal;
        @endphp
        <tr>
            <td>{{$fo->product_name}}</td>
            <td><?php echo $fo->product_price / 1000 ?>.000 vnd</td>
            <td>{{$fo->product_sales_quantity}}</td>
            <td>
                <?php
$subtotal = $fo->product_price * $fo->product_sales_quantity;
echo number_format($subtotal) . ' ' . 'vnd';
?>
            </td>
            <td></td>
        </tr>
        @endforeach
        <tr >
            <td></td>
            <td></td>
            <td><p class="wh-tem-price subtotal">Tổng tiền</p></td>
            <td>
                <p class="wh-tem-price subtotal">{{number_format($total).' '.'vnd'}}</p>
            </td>
        </tr>
    </tbody>
    <h2>Thank you!!!</h2>
</table>
</body>
</html>