<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('admin') }}/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('admin') }}/assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/favicon.png" />
</head>
<style>
	body{
		font-family: Quicksand;
	}
</style>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-4 mx-auto">
						<div class="card">
							<div class="row px-3">
                            <div class="card-body">
                                <center>
                                    <img src="{{ asset('admin/user1.png') }}" alt="" width="30%">
                                </center>
                                           
                                <h5 class="text-center"><span>LOGIN ADMIN</span></h5>
                            
                              <form method="POST" action="{{ url('proses_login') }}">
								{{ csrf_field() }}
                              
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sandi</label>
                                    <input type="password" name="password" class="form-control" placeholder="Sandi">
                                </div>
                                
                                <div class="mt-3 justify-content-center">
                                    <center>
                                         <button  type="submit"class="btn btn-primary  text-white">
                                             <i class="link-icon mr-2" data-feather="lock"></i>
                                                Login Admin
                                            </button>
                                     </center>
                                </div>
                            
                            </form>
                        </div>
                           
                         
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('admin') }}/assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('admin') }}/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="{{ asset('admin') }}/assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>