@extends('layout.master')

@section('main-content')
	<section class="under-head-cont">
		<div class="container">
			<div class="centered form">

				<form role="form" class="live_form form" id="login_form" method="post" action="http://www.bigto.in/user/login">
					<p class="title">Login</p>
					<div class="form-group">
						<input type="text" class="form-control" id="email" placeholder="Email or username" name="email" autofocus required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="pass" placeholder="Password" name="password" required>
						<i class="zmdi zmdi-dialpad"></i>
						<a href="#forgot" class="forgot-password" id="forgot-password">Forgot?</a>
					</div>
					<div class="form-group">
						<div class="round-check">
							<input type="checkbox" name="rememberme" value="1" id="round-checkbox">
							<label for="round-checkbox">Remember me</label>
						</div>
						<button type="submit" class="mdbtn btn btn-primary pull-right margin0">Login</button>
					</div>
					<input type='hidden' name='token' value='5bb6a50b60449b6699a5a8006ece28a81c1cb644' />
					<p class="info-row">
						<span>Don't have an account?</span>
						<a href="register.blade.php" class="register-link">Create account</a>
					</p>
					<hr>
					<div class="social">
						<h3>Login using a social network</h3>
						<a href="https://www.facebook.com/v2.0/dialog/oauth?client_id=374255706379985&amp;redirect_uri=http%3A%2F%2Fwww.bigto.in%2Fuser%2Flogin%2Ffacebook&amp;state=2bf9691b52c3d54b19ba169726772739&amp;sdk=php-sdk-4.0.11&amp;scope=email" class="btn btn-facebook" title="Login with Facebook"><i class="zmdi zmdi-facebook"></i></a>

					</div>
				</form>

				<form role="form" class="live_form" id="forgot_form" method="post" action="http://www.bigto.in/user/forgot">
					<div class="form-group">
						<input type="email" class="form-control" id="email1" placeholder="Email address" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<input type='hidden' name='token' value='5bb6a50b60449b6699a5a8006ece28a81c1cb644' />				<button type="submit" class="mdbtn btn btn-primary margin0">Reset Password</button>
					<a href="login.blade.php" class="pull-right" style="margin: 6px 0px;">Back to login</a>
				</form>
			</div>
		</div>
	</section>
@endsection



