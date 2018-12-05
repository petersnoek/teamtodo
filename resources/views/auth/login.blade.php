@include('templates.head')
<body>
<!-- Login Content -->
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-50 animated fadeIn">
                    <!-- Login Title -->
                    <div class="text-center">
                        <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                        <p class="text-muted push-15-t">Welkom! Login om je todo's te zien!</p>
                    </div>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                    <form method="POST" action="{{ route('login') }}" class="js-validation-login form-horizontal push-30-t" >
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">

                                <div class="form-material form-material-primary">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Voer je e-mail in..." type="email" id="login-username" name="email" required autofocus>
                                    <label for="login-username">E-Mail</label>

                                <div class="form-material form-material-primary floating">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" type="email" id="login-username" name="email" required autofocus>
                                    <label for="login-username">Email</label>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">

                                <div class="form-material form-material-primary">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Voer je wachtwoord in..." id="login-password" name="password" required>
                                    <label for="login-password">Wachtwoord</label>

                                <div class="form-material form-material-primary floating">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="login-password" name="password" required>
                                    <label for="login-password">Password</label>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-6">
                                <label class="css-input switch switch-sm switch-primary">

                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Onthoud mij?

                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?

                                </label>
                            </div>
                            <div class="col-xs-6">
                                <div class="font-s13 text-right push-5-t">

                                    <a href="base_pages_reminder_v2.html">Wachtwoord vergeten?</a>

                                    <a href="base_pages_reminder_v2.html">Forgot Password?</a>

                                </div>
                            </div>
                        </div>
                        <div class="form-group push-30-t">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button class="btn btn-sm btn-block btn-primary" type="submit">Log in</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Login Content -->
