@extends('customers.layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 margintop40">
                <h4 class="heading uppercase bottom30">Login to your account</h4>
                <form method="POST" action="{{ route('login') }}" class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label for="login_username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="login_username" placeholder="Username" tabindex="1" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="login_password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="login_password" placeholder="Password" tabindex="1"/>
                    </div>
                    <div class="form-group">
                        <label>
                            <div class="squaredFour">
                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                <label for="squaredFour"></label>
                            </div>
                            <h5>Keep me logged in!</h5>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="uppercase margintop40 btn-light" value="Login to your account">
                    </div>
                </form>
            </div>
            <div class="col-md-6 margintop40">
                <h4 class="heading uppercase bottom30">Create a new account</h4>
                <form method="POST" action="{{ route('register') }}"  class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label for="add_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="add_name" placeholder="Name" tabindex="1" autofocus value="{{ old('name') }}"/>
                        @error('name')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="add_username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="add_username" placeholder="Username" tabindex="2" value="{{ old('username') }}"/>
                        @error('username')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="add_password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="add_password" placeholder="Password" tabindex="2"/>
                        @error('password')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="add_password" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation" id="add_password" placeholder="Password" tabindex="2"/>
                    </div>

                    <div class="form-group">
                        <label for="add_address" class="form-label">Address</label>
                        <input type="address" class="form-control" name="address" id="add_address" placeholder="Address" tabindex="2" value="{{ old('address') }}"/>
                        @error('address')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="add_phone_num" class="form-label">Phone Number</label>
                        <input type="phone_num" class="form-control" name="phone_num" id="add_phone_num" placeholder="Phone Number" tabindex="2" value="{{ old('phone_num') }}"/>
                        @error('phone_num')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <p class="content_space">Create an account to unlock premium features such as tech comparison, checkout, and unlock the hidden price!</p>
                    <input type="submit" class="uppercase margintop40 btn-dark" value="Register now">
                </form>

            </div>
        </div>
    </div>
@endsection
