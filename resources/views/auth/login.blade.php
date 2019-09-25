@extends('layouts.private')

@section('content')
<div class="main">
    <div class="container">
            <div class="middle" >
                <div id="login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset class="clearfix">
                            <p>
                                <span class="fa fa-user"></span>
                                <input id="email" type="email" placeholder="Email,CPF,Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p> <!-- JS because of IE support; better: placeholder="Username" -->
                            <p>
                                <span class="fa fa-lock"></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p> <!-- JS because of IE support; better: placeholder="Password" -->
                            <div>
                                @if (Route::has('password.request'))
                                    <span style="width:48%; text-align:left;  display: inline-block;">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Perdeu sua senha?') }}
                                        </a>
                                    </span>
                                @endif
                                <span style="width:50%; text-align:right;  display: inline-block;">
                                    <input type="submit" value="{{ __('Login') }}" class="btn btn-primary">
                                </span>
                                    <!-- Authentication Links -->
                                    @guest
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Possui cadastro?') }}</a>
                                    @endguest
                            </div>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar de Mim') }}
                            </label>

                        </fieldset>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                </div> <!-- end login -->
                <div class="logo">
                    <img src="{{asset('images/logo1.png')}}" class="ml-5 mt-5 card-img-top" alt="...">
                    <div class="clearfix"></div>
                </div>
            </div>
        <!-- Right Side Of Navbar -->

    </div>
</div>
@endsection
