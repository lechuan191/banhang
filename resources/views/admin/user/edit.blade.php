@extends('admin.master')
 @section('content')   
 <div class="container-fluid">

    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4"> --}}
    <div class="card">
      {{-- <div class="card-header py-3"> --}}
          <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa user: {{$user->full_name}} 
        </h6>
      </div>
    
      <div class="card-body">
          {{-- <div class="card-text"> --}}
                {{-- <h5 class="card-title">Card title</h5> --}}
            <form action="admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="full_name" placeholder="" value="{{$user->full_name}}" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly="" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="changePassword" id="changePassword">
                            <label>Đổi mật khẩu</label>
                            <input class="form-control password" type="password" name="password" value="" disabled="" />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control password" type="password" name="passwordAgain" value="" disabled="" />
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="phone" value="{{$user->phone}}" />
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" name="address" value="{{$user->address}}" />
                        </div>
                        <div class="form-group">
                            <label>Quyền</label>
                            <label class="radio-inline">
                                <input name="quyen" value="0" 
                                @if($user->quyen == 0)
                                    {{'checked'}} 
                                @endif
                                type="radio">User
                            </label>
                            <label class="radio-inline">
                                <input name="quyen" 
                                @if($user->quyen == 1)
                                    {{'checked'}}
                                @endif
                                value="1" type="radio">Admin
                            </label>
                        </div>
                <button type="submit" class="btn btn-success">Sửa</button>
                <button type="reset" class="btn btn-info">Làm mới</button>
                
            </form>
    
      </div>
    </div>
    
    </div>
@endsection
@section('script')
<script type="text/javascript" language="javascript" src="backend/ckeditor/ckeditor.js"></script>
    <script >
            $(document).ready(function() {
                $(".alert").delay(3000).slideUp();
            });
              
    </script>
    <script>
        $(document).ready(function()
        {
            $("#changePassword").change(function()
            {
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection