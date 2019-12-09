@extends('admin.master')
@section('css')
 <!-- Custom styles for this page -->
 <link href="backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách slide</h1>
   
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Slide</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Hình Ảnh</th>
                <th>Link</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach($slide as $row)
              <tr align="center">
                  <td>{{$row->id}}</td>
                  <td><img width="100px" src="upload/slide/{{$row->image}}"></td>
                  <td>{{$row->link}}</td>
                  <td class="center"><a class="btn btn-danger" href="admin/slide/delete/{{$row->id}}">Delete</a></td>
                  <td class="center"><a class="btn btn-success" href="admin/slide/edit/{{$row->id}}">Edit</a></td>
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
