@extends('admin.master')
@section('content')
 <!-- Page Content -->
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">

            <form action="admin/user/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="full_name" placeholder="Nhập tên người dùng" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập email người dùng" />
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input class="form-control" type="password" name="password" value="" placeholder="" />
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input class="form-control" type="password" name="passwordAgain" value="" placeholder="" />
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input class="form-control" name="phone" placeholder="Nhập số điện thoại người dùng" />
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input class="form-control" name="address" placeholder="Nhập địa chỉ người dùng" />
                </div>
                <div class="form-group">
                    <label>Quyền</label>
                    <label class="radio-inline">
                        <input name="quyen" value="0" checked="" type="radio">User
                    </label>
                    <label class="radio-inline">
                        <input name="quyen" value="1" type="radio">Admin
                    </label>
                </div>
             
                <button type="submit" class="btn btn-success">Sửa</button>
                <button type="reset" class="btn btn-info">Làm mới</button>
            <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


@endsection