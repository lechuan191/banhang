@extends('admin.master')
 @section('content')   
 <div class="container-fluid">

    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4"> --}}
    <div class="card">
      {{-- <div class="card-header py-3"> --}}
          <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa loại sản phẩm :{{$theloai->name}}
        </h6>
      </div>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {$err}} <br>
                @endforeach
            </div>
        @endif

        @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif
    
      <div class="card-body">
          {{-- <div class="card-text"> --}}
                {{-- <h5 class="card-title">Card title</h5> --}}
            <form action="admin/product_type/edit/{{$theloai->id}}" method="POST" enctype="multipart/form-data">
                @csrf 
                {{-- {{ csrf_field() }}  --}}
            <div class="form-group">
                <label>Tên loại</label>
                <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm.." value="{{$theloai->name}}" />
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="description" rows="3">{{$theloai->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file"  name="image" />
                {{-- @if(isset($error_img))
                    <div class="alert alert-danger">{{$error_img}}</div>
                @endif --}}
                <br><img width="200px" src="upload/category/{{$theloai->image}}">
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
@endsection