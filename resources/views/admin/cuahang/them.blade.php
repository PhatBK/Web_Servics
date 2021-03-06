@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cửa Hàng Liên Kết
                <small>(thêm)</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                        {{$err}} <br />
                    @endforeach
                </div>
            @endif
            @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif

            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/cuahang/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                   
                    <div class="form-group">
                        <label>Tên Cửa Hàng</label>
                        <input class="form-control" name="ten" placeholder="Vui Lòng Nhập Tên Cửa Hàng Liên Kết.." required />
                    </div>
                    <div class="form-group">
                        <label>Giới Thiệu</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="gioi_thieu"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" name="link" placeholder="Vui Lòng Nhập Link Liên Kết ..." required />
                    </div>
                    <div class="form-group">
                        <label>Vị Chí</label>
                        <input class="form-control" name="vi_chi" placeholder="Vui Lòng Nhập Vị Chí Cửa Hàng..." required />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm Cửa Hàng</button>
                    <button type="reset" class="btn btn-default">Đặt Lại Mặc Định</button>
                </form>
                </div>
            </div>
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->
@endsection