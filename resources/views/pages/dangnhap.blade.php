 @extends('layout.index')
 @section('content')
 <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng nhập</div>
				  	@if(session('thongbao'))
				  		<div class="alert alert-danger">
				  			{{session('thongbao')}}
				  		</div>
				  	@endif
				  	<div class="panel-body">
				    	<form action="dangnhap" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div>
				    			<label>Username</label>
							  	<input type="text" class="form-control" placeholder="Username" name="username" 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" name="password">
							</div>
							<br>
							<input  type="submit" class="form-control" value="Đăng nhập" />
							</button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
 @endsection