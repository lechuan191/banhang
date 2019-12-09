@extends('admin.master')
@section('content')
 <!-- Page Content -->
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại tin
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/slide/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" name="link" placeholder="Nhập link cho slide..." />
                    </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control" />
                        {{-- @if(isset($error_img))
                            <div class="alert alert-danger">{{$error_img}}</div>
                        @endif --}}
                </div>
                <button type="submit" class="btn btn-success">Thêm</button>
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
@section('script')
<script >
        $(document).ready(function() {
            $(".alert").delay(3000).slideUp();
        });
          
</script>
@endsection