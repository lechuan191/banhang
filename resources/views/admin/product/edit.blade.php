@extends('admin.master')
 @section('content')   
 <div class="container-fluid">

    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4"> --}}
    <div class="card">
      {{-- <div class="card-header py-3"> --}}
          <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa :{{$sanpham->name}} 
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
            <form action="admin/product/edit/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">                        
                <div class="form-group">
                <label>Thể Loại</label>
                <select class="form-control" name="product_type" id="theloai">
                @foreach($theloai as $tl)
                    <option
                    @if($sanpham->product_type->id == $tl->id)
                        {{"selected"}}
                    @endif
                    value="{{$tl->id}}">{{$tl->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input class="form-control" name="name" value="{{$sanpham->name}}" />
            </div>
            <div class="form-group">
                <label>Mô Tả</label>
                <textarea class="form-control ckeditor" name="description" rows="3">{{$sanpham->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control ckeditor" name="content" rows="3">{{$sanpham->content}}</textarea>
            </div>
            <div class="form-group">
                <label>Hình Ảnh</label>
                <input type="file" name="image" />
                {{-- @if(session('error_img'))
                    <div class="alert alert-danger">{{session('error_img')}}</div>
                @endif --}}
                <br><img width="200px" src="upload/product/{{$sanpham->image}}">
            </div>
            <div class="form-group">
                <label>Đơn Giá</label>
                <input class="form-control" name="unit_price" value="{{$sanpham->unit_price}}" />
            </div>
            <div class="form-group">
                <label>Giá Khuyến Mãi</label>
                <input class="form-control" name="promotion_price" value="{{$sanpham->promotion_price}}" />
            </div>
            <div class="form-group">
                <label>Đơn vị</label>
                
                <input class="form-control" name="unit" value="{{$sanpham->unit}}" />
            </div>
            <div class="form-group">
                <label>Sản Phẩm Mới &nbsp;</label>
                <label class="radio-inline">
                    <input name="new" value="0" type="radio"
                    @if($sanpham->new == 0)
                        {{"checked"}}
                    @endif
                    >Không
                </label>
                <label class="radio-inline">
                    <input name="new" value="1" type="radio"
                    @if($sanpham->new == 1)
                        {{"checked"}}
                    @endif>Có
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
@endsection