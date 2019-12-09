@extends('admin.master')
 @section('content')   
 <div class="container-fluid">

    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4"> --}}
    <div class="card">
      {{-- <div class="card-header py-3"> --}}
          <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa slide
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
            <form action="admin/slide/edit/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" name="link" value="{{$slide->link}}" placeholder="Nhập link cho slide..." />
                    </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control" />
                        {{-- @if(isset($error_img))
                            <div class="alert alert-danger">{{$error_img}}</div>
                        @endif --}}
                        <br><img width="100px" src="upload/slide/{{$slide->image}}">
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