@extends('admin.master')
@section('css')
 <!-- Custom styles for this page -->
 <link href="backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách user</h1>
    
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>                                
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Quyền</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->full_name}}</td>
                <td>{{$item->email}}</td>
                <td> 
                  @if($item->quyen == 0)
                    {{'User'}}
                  @elseif($item->quyen == 1)
                    {{'Admin'}}
                  @endif</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->address}}</td>
                <td class="center"><a class="btn btn-danger"  href="admin/user/delete/{{$item->id}}">DELETE</a></td>
                <td class="center"><a class="btn btn-info" href="admin/user/edit/{{$item->id}}">EDIT</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
@section('script')
  <!-- Page level plugins -->
  <script src="backend/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="backend/js/demo/datatables-demo.js"></script>
    
@endsection
