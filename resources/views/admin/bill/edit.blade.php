@extends('admin.master')
 @section('content')   
 <div class="container-fluid">

    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4"> --}}
    <div class="card">
      {{-- <div class="card-header py-3"> --}}
          <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa user 
        </h6>
      </div>
    
      <div class="card-body">
          {{-- <div class="card-text"> --}}
                {{-- <h5 class="card-title">Card title</h5> --}}
            <form action="edit_user2.php" method="POST">
              <input type="hidden" name="edit_id" value="">
    
              <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="username" value="" class="form-control" >
            </div>
            <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="" class="form-control" >
            </div>
            <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="" class="form-control">
            </div>
            <button type="submit" name="update_btn" class="btn btn-primary">Lưu</button>
            <a href="admin.php" class="btn btn-danger">Hủy</a>
            </form>
    
      </div>
    </div>
    
    </div>
    <!-- /.container-fluid -->
 {{-- <!-- Page Content -->
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại tin
                    <small></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">

            
             <div class="alert alert-danger">
                <br>
                
            </div>
            

            
            <div class="alert alert-success">
                
            </div>
            

            <form action="" method="POST">
                
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="TheLoai">
                        
                        <option>
                        </option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Tên loại tin</label>
                    <input class="form-control" name="Ten" value="" placeholder="Nhập tên loại tin" />
                </div>                                                 

                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper --> --}}

    @endsection