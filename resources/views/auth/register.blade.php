@extends('layouts.app')

@section('content')

<section class="getintouch">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        
                            <label for="name">{{ __('Name') }}</label>

                        
                                <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                      
                            <label for="email">{{ __('E-Mail Address') }}</label>

                        
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        

                        
                            <label for="password">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                     
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  name="password_confirmation" required autocomplete="new-password">
        
                 

                        
                        
                                <button type="submit" class="btn1">
                                    {{ __('Register') }}
                                </button>
                            
                       
                    </form>
                    </section>
                
@endsection
