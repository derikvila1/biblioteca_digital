@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Biblioteca Virtual do Amazonas - Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap"
		rel="stylesheet">
	<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="css/util.css">-->
	<link rel="stylesheet" type="text/css" href="css/css-cadastro.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form flex-sb flex-w">
					<a href="home-biblioteca.html"><p style="text-align: center;">logo</p></a>
                    @csrf
                    <br>
					<span class="login100-form-title p-b-53">
						Cadastrar
					</span>


					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nome
						</span>
					</div>
					<div class="wrap-input100 validate-input" style="margin-bottom: 14px;"
						data-validate="Username is required">
						<input class="input100" type="text" name="name" id="name">
						<span class="focus-input100"></span>
					</div>


					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Email
						</span>


					</div>
					<div class="wrap-input100 validate-input" style="margin-bottom: 14px;"
						data-validate="Password is required">
						<input class="input100" type="email" id="email" name="email">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>


					</div>
					<div class="wrap-input100 validate-input" style="margin-bottom: 14px;"
						data-validate="Password is required">
						<input class="input100" type="password" id="password" name="password">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Confirmar senha
						</span>


					</div>
					<div class="wrap-input100 validate-input" style="margin-bottom: 20px;"
						data-validate="Password is required">
						<input class="input100" type="password" id="password-confirm" name="password_confirmation">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Cadastre-se
						</button>
					</div>


					<br>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Já possui cadastro?
						</span>

						<a href="{{route('login')}}" class="txt2 bo1">
							Faça o login aqui
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>

    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nome da Instituição') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="address"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cellphone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                                <div class="col-md-6">
                                    <input id="cellphone" type="tel"
                                        class="form-control @error('cellphone') is-invalid @enderror" name="cellphone"
                                        value="{{ old('cellphone') }}" required autocomplete="cellphone">

                                    @error('cellphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar novo usuário') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
