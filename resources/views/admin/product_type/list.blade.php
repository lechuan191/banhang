@extends('admin.master')
@section('css')
 <!-- Custom styles for this page -->
 <link href="backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách loại sản phẩm</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Loại sản phẩm</h6>
      </div>
      <div class="col-lg-12">
          @if(session('thongbao'))
          <div class="alert alert-success">
              {{session('thongbao')}}
          </div>
      @endif
       
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr align="center">
                <th>ID</th>
                <th>Tên</th>
                <th>Hình Ảnh</th>
                {{-- <th>Ngày Tạo</th> --}}
                <th>Delete</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach($theloai as $row)
                  <tr align="center">
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                      <td><img width="50" src="upload/category/{{$row->image}}"></td>
                      {{-- <td>{{$row->created_at}}</td> --}}
                      <td class="center"><a class="btn btn-danger"  href="admin/product_type/delete/{{$row->id}}"><i class="fas fa-edit	">DEL</i></a></td>
                      <td class="center"><a class="btn btn-success" href="admin/product_type/edit/{{$row->id}}"><i class='fas fa-trash-alt'>EDIT</i></a></td>
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
