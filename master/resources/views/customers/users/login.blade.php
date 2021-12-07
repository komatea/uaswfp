@extends('customers.layouts.app')

@section('content')
<section id="cart">
    <div class="container">
      <div class="row">
        <div class="col-md-6 margintop40">
          <h4 class="heading uppercase bottom30">Create a new account</h4>
          <p class="content_space">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <form class="contact-form">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="jone.doe">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="*****">
              </div>
                <input type="submit" class="uppercase margintop40 btn-dark" value="REgister now">
                <input type="submit" class="btn-dark uppercase margintop40" value="Checkout as guest">
          </form>
        
        </div>
        <div class="col-md-6 margintop40">
          <h4 class="heading uppercase bottom30">Login to your account</h4>
          <form class="contact-form">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username-log" name="username" placeholder="jane.doe">
              </div>
              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass-log" name="password" placeholder="*****">
              </div>
              {{-- <div class="form-group">
              <label>
                <div class="squaredFour">
                  <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                  <label for="squaredFour"></label>
               </div>
               <h5>Keep me logged in</h5>
                <a href="#.">Forgot your password?</a>
               </label>
              </div> --}}
              <div class="form-group">
                 <input type="submit" class="uppercase margintop40 btn-light" value="Login to your account">
              </div>
          </form>
          <a href="#." class="uppercase btn-common facebook-share"><i class="fa fa-facebook"></i>Login facebook</a>
          <a href="#." class="uppercase btn-common twitter-share"><i class="fa fa-twitter"></i>Login twitter</a>
        </div>
      </div>
    </div>
</section>
@endsection
