@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('register') }}" class="user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <div class="row">
 
                                        <select name="zone" class="form-control col-md-5" 
                                         required autofocus>
                                            <option value="">Select Zone*</option>
                                            <option value="WR">WR</option>

                                        </select>
                                        
                                        <div class="col-md-1">&nbsp;</div>
                                        <select name="division" class="form-control col-md-5" 
                                         required autofocus>
                                            <option value="">Select Division*</option>
                                            <option value="MMCT">MMCT</option>
                                    
                                        </select>
                                        </div>
                                        
                                    </div>

                                    <hr>

                                   <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="designation" placeholder="{{ __('Designation *') }}" value="{{ old('designation') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" maxlength="10" class="form-control form-control-user" name="cug" placeholder="{{ __('CUG Number *') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Password') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                                    </div>

                                    <input type="hidden" class="form-control form-control-user" name="admin_power" value="0">

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">
                                        {{ __('Already have an account? Login!') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
