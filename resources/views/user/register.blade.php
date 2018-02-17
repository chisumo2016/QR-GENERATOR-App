@extends('layout.master')

@section('main-content')

<section class="under-head-cont">
	<div class="container">
		<div class="centered form">      
			      
			<form role="form" class="live_form" id="login_form" method="post" action="http://www.bigto.in/user/register">
				<p class="title">Get Started</p>
				<div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="Username" name="username" autofocus>
					<i class="zmdi zmdi-account"></i>
				</div>        
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Email address" name="email">
					<i class="zmdi zmdi-email"></i>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="pass" placeholder="Password" name="password">
					<i class="zmdi zmdi-dialpad"></i>
				</div>     
				<div class="form-group">
					<input type="password" class="form-control" id="pass2" placeholder="Confirm Password" name="cpassword">
					<i class="zmdi zmdi-dialpad"></i>
				</div>  
				            
				<div class="form-group">
					<div class="round-check">
						<input type="checkbox" name="terms" value="1" id="round-checkbox"> 
						<label for="round-checkbox">I agree to the <a href="../page/terms.html" target="_blank">terms and conditions</a>.</label>
					</div>
				</div>          
				<input type='hidden' name='token' value='5bb6a50b60449b6699a5a8006ece28a81c1cb644' />				<button type="submit" class="mdbtn btn btn-primary width100">Create account</button>
								<hr>
				<div class="social">
					<h3>Login using a social network</h3>
										<a href="https://www.facebook.com/v2.0/dialog/oauth?client_id=374255706379985&amp;redirect_uri=http%3A%2F%2Fwww.bigto.in%2Fuser%2Flogin%2Ffacebook&amp;state=2bf9691b52c3d54b19ba169726772739&amp;sdk=php-sdk-4.0.11&amp;scope=email" class="btn btn-facebook" title="Login with Facebook"><i class="zmdi zmdi-facebook"></i></a>
															          
				</div>
				 
			</form>        
		</div>
	</div>
</section>
@endsection
