@include('templates.head')


<body>
<!-- Register Content -->
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-20 animated fadeIn">
                    <!-- Register Title -->
                    <div class="text-center">
                        <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                        <h1 class="h3 push-10-t">Maak een account</h1>
                    </div>
                    <!-- END Register Title -->

                    <!-- Register Form -->
                    <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-register form-horizontal push-50-t push-50" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" type="text" id="register-username" placeholder="Vul een gebruikersnaam in..." required>
                                    <label for="register-username">Gebruikersnaam</label>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Voer een e-mail in..." value="{{ old('email') }}" required>
                                    <label for="register-email">E-Mail</label>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input id="register-password" type="password" placeholder="Voer een wachtwoord in..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <label for="register-password">Wachtwoord</label>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="register-password2" name="password_confirmation" placeholder="Vul je wachtwoord opnieuw in..." required>
                                    <label for="register-password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                <button class="btn btn-sm btn-block btn-success" type="submit">Maak account</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Register Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Register Content -->

<!-- Register Footer -->
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted"><span class="js-year-copy"></span> &copy; OneUI 3.4</small>
</div>
<!-- END Register Footer -->
