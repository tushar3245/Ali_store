@extends('frontend.master')

@section('mainsection')
     <!--banner-->
     <div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="{{url('/')}}">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="container" style="margin-top:30px ">


@if (\Session::has('success_message'))
                              <div class="alert alert-success">
                               
                        {!! \Session::get('success_message') !!}
                                
                                  </div>
                                @endif
              <!-- ============================================================== -->
                              <!-- unsuccess-->


                              @if (\Session::has('error_message'))
                              <div class="alert alert-success">
                               
                               {!! \Session::get('error_message') !!}
                                
                                  
                                @endif
								</div>

						
										 
</div>
								<!--login-->
<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="{{url('user-register')}}" method="post">
                        @csrf
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Username" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"  required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>

@endsection