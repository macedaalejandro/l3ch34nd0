
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><span class="glyphicon glyphicon-user"></span> Accesar</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
<!--
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
-->
                                <h6>LOGIN</h6>
								 <form class="form" role="form" method="post" action="http://lecheando.com/function/function_login.php" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Olvidaste tu contraseña ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
										</div>
										 <input type="hidden" name="referer" value="<?= $_SERVER['HTTP_REFERER'] ?>" />
										<div class="checkbox">
											 <label>
											 <input type="checkbox" name="recordarme"> Recordame
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								Nuevo aqui ? <a href="http://lecheando.com/register.php"><b>REGISTRATE</b></a>
							</div>
					 </div>
				</li>
				</ul>
				</li>
