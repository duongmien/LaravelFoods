    <style>
        body{
            font-family: DejaVu Sans;
        }
    </style>
    <h2>LaravelFood</h2>
    <h4>48 Cao Thắng, phường Thanh Bình, quận Hải Châu, thành phố Đà Nẵng</h4>
    <h4>SDT: 0987456123</h4>
    <h1>Hóa đơn đặt hàng</h1>
    <h3>HD00182</h3>
    <table>
        <tr>
            <th>Thời gian đặt</th>
            <td>1</td>
        </tr>
        <tr>
            <th>Người duyệt</th>
            <td>2</td>
        </tr>
    </table>

    <h2>Thông tin khách hàng</h2>

    <table>
        <tr>
            <th>Tên khách hàng</th>
            <td>'.$order[0]->shipping_name.'</td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td>'.$order[0]->shipping_address.'</td>
        </tr>
        <tr>
            <th>SDT</th>
            <td>'.$order[0]->shipping_phone.'</td>
        </tr>
    </table><table>
    <tr>
        <th>Email</th>
        <td>'.$order[0]->shipping_email.'</td>
    </tr>
    <tr>
        <th>Hình thức thanh toán</th>
        <td>'.$order[0]->payment_method.'</td>
    </tr>
    <tr>
        <th>Ngày đặt</th>
        <td>'.$order[0]->date.'</td>
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
            <tr>
                <td></td>
                <td>'..'</td>
                <td>'..'</td>
                <td>'..'</td>
                <td>'..'</td>
                <td></td>
            </tr>
        </tbody> 
    </table>