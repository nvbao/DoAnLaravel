<h1>DANH SÁCH NGƯỜI DÙNG </h1>
<a href="{{route('form-them-moi-nguoi-dung')}}">Thêm mới</a>
<table border="1" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mật khẩu</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Giới tính</th>
        <th>Ảnh đại diện</th>
        <th>Trạng thái</th>


    </tr>
    @foreach($listNguoiDung as $nguoiDung)
    <tr>
        <td>{{$nguoiDung->id}}</td>
        <td>{{$nguoiDung->ho_ten}}</td>
        <td>{{$nguoiDung->mat_khau}}</td>
        <td>{{$nguoiDung->phone}}</td>
        <td>{{$nguoiDung->email}}</td>
        <td>{{$nguoiDung->gioi_tinh}}</td>
        <td>{{$nguoiDung->anh_dai_dien}}</td>
        <td>{{$nguoiDung->trang_thai}}</td>




    </tr>
    @endforeach
</table>