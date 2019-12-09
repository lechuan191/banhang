@extends('admin.master')
@section('css')
 <!-- Custom styles for this page -->
 <link href="backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
      </div>
      @if(session('thongbao'))
          <div class="alert alert-success">
              {{session('thongbao')}}
          </div>
      @endif
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
                {{-- <th>Hình Ảnh</th> --}}
                <th>Thể Loại</th>
                <th>Đơn Giá</th>
                <th>Khuyến Mại</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sanpham as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                {{-- <td><img width="90" src="upload/product/{{$item->image}}"></td> --}}
                <td>{{$item->product_type->name}}</td>
                <td>{{number_format($item->unit_price)}} VNĐ</td>
                <td>{{number_format($item->promotion_price)}} VNĐ</td>
                <td class="center"><a class="btn btn-danger"  href="admin/product/delete/{{$item->id}}">DELETE</a></td>
                <td class="center"><a class="btn btn-success" href="admin/product/edit/{{$item->id}}">EDIT</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
@section('script')
  <!-- Page level plugins -->
  <script src="backend/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="backend/js/demo/datatables-demo.js"></script>
  
@endsection
