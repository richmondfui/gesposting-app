@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5">
            <div class="main-card mb-3 card mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center">LOGIN</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="position-relative form-group my-3"><label for="exampleEmail"
                                class="">Email</label><input name="email" id="exampleEmail"
                                placeholder="Enter your email..." type="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="position-relative form-group my-3"><label for="examplePassword"
                                class="">Password</label><input name="password" id="examplePassword"
                                placeholder="Enter your password..." type="password"
                                class="form-control @error('password') is-invalid @enderror" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row my-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group position-relative row my-3">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
