@include('layouts.header')
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
            @include('layouts.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
				
			@include('layouts.navbar')

              @yield('content')
            </div>
        </div>
		@include('sweetalert::alert')

			</div>
@include('layouts.footer')