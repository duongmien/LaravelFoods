
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Food</title>
    <link rel="icon" type="png" href="{{asset('frontend/assets/img/favicon.png')}}">
    <style>
        h1,h2,h3,h4,h5,h6,p {
            margin: 0;
        }
        body{
            font-family: DejaVu Sans;
        }
        .table {
            border-collapse: collapse;
            border: 1px solid #000;
            margin-top: 10px;
        }
        .table tr{
            border: 1px solid #000;
        }
        .table td{
            border: 1px solid #000;
            padding: 0 15px
        }
        .table th{
            border: 1px solid #000;
            padding: 0 15px
        }
        .clearfix {
            clear: both
        }
        .header .right{
            float: right
        }
        .title {
            text-align: center;
            margin: 20px 0 0 0;
        }
        .sub-title {
            text-align: center;
            margin: 0 0 10px 0;
        }
        .left-text {
            text-align: left
        }
        .right-text {
            padding: 0 20px
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{URL::to('img/logo-black.png')}}"  width="280px"  alt="Image">
        <div class="right">
            <h4>Địa chỉ: 48 Cao Thắng, phường Thanh Bình,<br/> quận Hải Châu, thành phố Đà Nẵng.</h4>
            <h4>SĐT: 0987456123</h4>
        </div>
        <div class="clearfix"></div>
    </div>
    <h1 class="title">Hóa đơn đặt hàng</h1>
    <h3 class="sub-title">HD00182</h3>
    <h3 style="text-decoration: underline; margin-top: 10px">Thông tin chung</h3>
    <table class="">
        <tr>
            <th class="left-text">Thời gian đặt:</th>
            <td class="right-text">{{$order[0]->date}}</td>
        </tr>
        <tr>
            <th class="left-text">Người duyệt:</th>
            <td class="right-text">admin</td>
        </tr>
    </table>

    <h3 style="text-decoration: underline; margin-top: 10px">Thông tin khách hàng</h3>
    <table>
        <tr>
            <th class="left-text">Tên khách hàng:</th>
            <td class="right-text">{{$order[0]->shipping_name}}</td>
        </tr>
        <tr>
            <th class="left-text">Địa chỉ:</th>
            <td class="right-text">{{$order[0]->shipping_address}}</td>
        </tr>
        <tr>
            <th class="left-text">SDT:</th>
            <td class="right-text">{{$order[0]->shipping_phone}}</td>
        </tr>
        <tr>
            <th class="left-text">Email:</th>
            <td class="right-text">{{$order[0]->shipping_email}}</td>
        </tr>
        <tr>
            <th class="left-text">Hình thức thanh toán:</th>
            <td class="right-text">{{$order[0]->payment_method}}</td>
        </tr>
        <tr>
            <th class="left-text">Ngày đặt:</th>
            <td class="right-text">{{$order[0]->date}}</td>
        </tr>
    </table>

    <h3 style="text-decoration: underline; margin-top: 10px">Liệt kê chi tiết đơn hàng</h3>

    <table class="table">
        <thead>
            <tr>
                <th style="padding-top: 5px; padding-bottom: 5px">Tên sản phẩm</th>
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
                <td style="text-align: right"><?php echo $fo->product_price / 1000 ?>.000 vnd</td>
                <td style="text-align: center">{{$fo->product_sales_quantity}}</td>
                <td style="text-align: right">
                    <?php
                        $subtotal = $fo->product_price * $fo->product_sales_quantity;
                        echo number_format($subtotal) . ' ' . 'vnd';
                    ?>
                </td>
            </tr>
            @endforeach
            <!-- <tr >
                <td></td>
                <td></td>
                <td><p class="wh-tem-price subtotal">Tổng tiền</p></td>
                <td>
                    <p class="wh-tem-price subtotal">{{number_format($total).' '.'vnd'}}</p>
                </td>
            </tr> -->
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="font-weight: bold">Tổng tiền</td>
                <td style="padding-top: 5px; padding-bottom: 5px">{{number_format($total).' '.'vnd'}}</td>
            </tr>
        </tfoot>
        <h3 class="title">~ Thank you!!! ~</h3>
    </table>
</body>
</html>