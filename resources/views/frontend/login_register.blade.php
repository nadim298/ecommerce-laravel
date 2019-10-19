@extends('layouts/frontendapp')
@section('frontend_content')
  <main>
<section class="container stylization maincont">


<ul class="b-crumbs">
    <li>
        <a href="index-2.html">
            Home
        </a>
    </li>
    <li>
        <span>Registration / Login</span>
    </li>
</ul>
<h1 class="main-ttl"><span>Registration / Login</span></h1>
<div class="auth-wrap">
    <div class="auth-col">
        <h2>Login</h2>
        <form method="post" class="login">
            <p>
                <label for="username">E-mail <span class="required">*</span></label><input type="text" id="username">
            </p>
            <p>
                <label for="password">Password <span class="required">*</span></label><input type="password" id="password">
            </p>
            <p class="auth-submit">
                <input type="submit" value="Login">
                <input type="checkbox" id="rememberme" value="forever">
                <label for="rememberme">Remember me</label>
            </p>
            <p class="auth-lost_password">
                <a href="#">Lost your password?</a>
            </p>
        </form>
    </div>
    <div class="auth-col">
        <h2>Register</h2>

        <form method="post" class="register" action="{{url('user/login/register')}}">
          @csrf
          <p>
              <label for="reg_email">Name <span class="required">*</span></label><input type="text" id="name" name="name" required>
          </p>
            <p>
                <label for="reg_email">Email <span class="required">*</span></label><input type="email" id="reg_email" name="email" required>
            </p>
            <p>
                <label for="reg_password">Password <span class="required">*</span></label><input type="password" id="reg_password" name="password" required>
            </p>
            <p class="auth-submit">
                <input type="submit" value="Register">
            </p>
        </form>
        @if (session('success_message'))
          <div class="col-lg-12">
            <div class="card-body">
              <span style="text-align:center;display: block;" class="alert alert-success">{{session('success_message')}}</span>
            </div>
          </div>
        @endif
        @if (session('error_message'))
          <div class="col-lg-12">
            <div class="card-body">
              <span style="text-align:center;display: block;" class="alert alert-danger">{{session('error_message')}}</span>
            </div>
          </div>
        @endif
    </div>
</div>



</section>
</main>
<!-- Main Content - end -->

@endsection
