@extends('main')

@section('content')

	
	<div class="container" id="login-content">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<form class="form-signin" autocomplete="off" name="formLogin">
					@csrf
				<div class="card-header">
					<h3>Entrar:</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username" name="username" id="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password" id="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Lembrar-me
						</div>
						<div class="form-group">
							<input type="submit" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Não tem uma conta?<a href="#">Cadastre-se</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Esqueci a senha</a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>

@stop