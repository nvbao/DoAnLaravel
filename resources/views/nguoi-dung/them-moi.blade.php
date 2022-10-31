<h1>THÊM MỚI NGƯỜI DÙNG </h1>

<a href="{{route('danh-sach-nguoi-dung')}}">Quay lại danh sách người dùng</a>
<form action="{{route('them-moi-nguoi-dung')}}" method="POST">
@csrf
@csrf
    <table border="0">
        <tr> 
            <td>Họ và tên:</td>
            <td><input type="text" name="ho_ten"/></td>
        </tr>
        <tr> 
            <td> Mật khẩu:</td>
            <td><input type="text" name="mat_khau"/></td>
        </tr>
        <tr> 
            <td>Phone:</td>
            <td><input type="text" name="phone"/></td>  
        </tr>
        <tr> 
            <td>Email:</td>
            <td><input type="text" name="email"/></td>  
        </tr>
        <tr> 
            <td>Giới tính:</td>
            <td><input type="text" name="gioi_tinh"/></td>  
        </tr>
        <tr> 
            <td>Ảnh đại diện:</td>
            <td><input type="text" name="anh_dai_dien"/></td>  
        </tr>
        <tr> 
            <td>Trang Thái:</td>
            <td><input type="text" name="trang_thai"/></td>  
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Thêm mới</button></td>
        </tr>
    </table>
</from>