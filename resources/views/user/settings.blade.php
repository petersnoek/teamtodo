@extends('templates.app')

@section('title', 'Instellingen')
@section('contentTitle', 'Instellingen')
@section('description', 'Pas hier je instellingen aan')

@section('content')

    <!-- Page Content -->
    <div class="content content-boxed" style="padding-top: 0;">

        <form action="/instellingen/save" method="post">

            {{ csrf_field() }}

            <div class="push-30-t push-30 text-center">
                <h2 class="h1 font-w600 text-black push-5">Profiel aanpassen</h2>
            </div>
            <div class="block block-rounded">
                <div class="block-content">

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif

                    <!-- User Profile -->
                    <h3 class="page-header text-black">Gebruikersprofiel</h3>
                    <div class="row items-push">
                        <div class="col-md-3">
                            <p class="text-muted">
                                Basis informatie
                            </p>
                        </div>
                        <div class="col-md-7 col-md-offset-1 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="crypto-profile-picture">Profielfoto</label>
                                    <input type="file" class="form-control input-lg" name="profilepicture" id="crypto-profile-picture" style="padding-bottom: 56px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="crypto-profile-nickname">Naam</label>
                                    <input class="form-control input-lg" type="text" id="crypto-profile-nickname" name="crypto-profile-nickname" placeholder="Vul je naam in..." value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="crypto-profile-email">E-Mail</label>
                                    <input class="form-control input-lg" type="email" id="crypto-profile-email" name="crypto-profile-email" placeholder="Vul je e-mail in..." value="{{$user->email}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END User Profile -->

                    <!-- Change Password -->
                    <h3 class="page-header text-black">Wachtwoord aanpassen</h3>
                    <div class="row items-push">
                        <div class="col-md-3">
                            <p class="text-muted">
                                Je wachtwoord regelmatig veranderen is goed voor de veiligheid van je account.
                            </p>
                        </div>
                        <div class="col-md-7 col-md-offset-1 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="crypto-profile-password">Huidige wachtwoord</label>
                                    <input class="form-control input-lg" type="password" id="crypto-profile-password" name="crypto-profile-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="crypto-profile-password-new">Nieuw wachtwoord</label>
                                    <input class="form-control input-lg" type="password" id="crypto-profile-password-new" name="crypto-profile-password-new">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="crypto-profile-password-new-confirm">Bevestig nieuw wachtwoord</label>
                                    <input class="form-control input-lg" type="password" id="crypto-profile-password-new-confirm" name="crypto-profile-password-new-confirm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Change Password -->

                    <!-- Personal Details -->
                    <h3 class="page-header text-black">Persoonlijke details</h3>
                    <div class="row items-push">
                        <div class="col-md-3">
                            <p class="text-muted">
                                Deze informatie komt op je profiel te staan. Dit is zichtbaar voor iedereen.
                            </p>
                        </div>
                        <div class="col-md-7 col-md-offset-1 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="phone">Telefoonnummer</label>
                                    <input class="form-control input-lg" placeholder="Vul je telefoonnummer in..." value="{{$user->profile->phone}}" type="text" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="linkedin">LinkedIn</label>
                                    <input class="form-control input-lg" placeholder="Vul je LinkedIn url in..." value="{{$user->profile->linkedin}}" type="text" name="linkedin">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="twitter">Twitter</label>
                                    <input class="form-control input-lg" placeholder="Vul je Twitter url in..." value="{{$user->profile->twitter}}" type="text" name="twitter">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="facebook">Facebook</label>
                                    <input class="form-control input-lg" placeholder="Vul je Facebook url in..." value="{{$user->profile->facebook}}" type="text" name="facebook">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Personal Details -->

                    <!-- Security -->
                    <h3 class="page-header text-black">Beveiliging</h3>
                    <div class="row items-push">
                        <div class="col-md-3">
                            <p class="text-muted">
                                Houd je account veilig.
                            </p>
                        </div>
                        <div class="col-md-3 col-md-offset-1 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Online Status</div>
                                    <div class="font-s13 font-w400 text-muted">Laat je status aan iedereen zien</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1 form-horizontal">
                            <!-- Rechter column -->
                        </div>
                    </div>
                    <!-- END Security -->
                </div>
                <div class="block-content block-content-full bg-gray-lighter">
                    <button class="btn btn-sm btn-success pull-right" type="submit">
                        <i class="fa fa-check push-5-r"></i> Sla op
                    </button>
                    <button class="btn btn-sm btn-default" type="reset">
                        <i class="fa fa-refresh push-5-r"></i> Zet standaardinstellingen terug
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- END Page Content -->

@endsection
