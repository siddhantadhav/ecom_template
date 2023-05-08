<?php $this->view("admin/header", $data); ?>

<style>
	
</style>
<div id="login-page">
	<div class="container">  	
	    <form class="form-login" action="" method="post">
		    <h2 class="form-login-heading">sign in now</h2>
		    <div class="login-wrap">
	            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
	            <br>
				<input type="password" name="password" class="form-control" placeholder="Password">
				<br>
				<button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
	        </div>
	    </form>	
	</div>
</div>
		
<?php $this->view("admin/footer", $data); ?>
