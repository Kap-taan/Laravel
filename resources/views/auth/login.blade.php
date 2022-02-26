@extends('layouts.app')

@section('content')
<section class="getintouch">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        
                            <label for="password">{{ __('Password') }}</label>

                            
                                <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        

                      
                                <button type="submit" class="btn1">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                           
                    </form>
</section>
@endsection
