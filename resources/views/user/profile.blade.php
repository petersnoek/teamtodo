@extends('templates.app')

@section('title', 'Profiel van ' . $user->name)

@section('contentTitle', null)

@section('description')
    <div class="push-50-t push-15 clearfix">
        <div class="push-15-r pull-left animated fadeIn">
            <img class="img-avatar img-avatar-thumb" src="{{asset('img/profilepictures/' . $user->profile->user_id . '.jpg')}}" alt="">
        </div>
        <h1 class="h2 push-5-t animated zoomIn">{{$user->name}}</h1>
        <h2 class="h5 animated zoomIn">{{$user->profile->description}}</h2>
    </div>
@endsection

@section('content')

    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed" style="padding: 0;">

            <!-- Stats -->
            <div class="content bg-white border-b">
                <div class="row items-push text-uppercase">
                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">Borden</div>
                        <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">4</a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">Todo's</div>
                        <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">31</a>
                    </div>
                    <div class="col-xs-6 col-sm-3" style="float: right;">
                        @if ($user->profile->user_id == Auth::id())
                            <a style="float: right; line-height: 40px" href="/instellingen" class="btn btn-primary">Pas profiel aan</a>
                        @else
                            <a style="float: right; line-height: 40px" href="#" class="btn btn-primary">Verzend bericht</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- END Stats -->

            <!-- Page Content -->
            <div class="content content-boxed">
                <div class="row">
                    <div class="col-sm-7 col-lg-8">
                        <!-- Timeline -->
                        <div class="block">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </li>
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Recente activiteit</h3>
                            </div>
                            <div class="block-content">
                                <ul class="list list-timeline pull-t">
                                    <!-- Facebook Notification -->
                                    <li>
                                        <div class="list-timeline-time">3 hrs ago</div>
                                        <i class="fa fa-facebook list-timeline-icon bg-default"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">+ 290 Page Likes</p>
                                            <p class="font-s13">This is great, keep it up!</p>
                                        </div>
                                    </li>
                                    <!-- END Facebook Notification -->

                                    <!-- Generic Notification -->
                                    <li>
                                        <div class="list-timeline-time">4 hrs ago</div>
                                        <i class="fa fa-briefcase list-timeline-icon bg-modern"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">3 New Products were added!</p>
                                            <div class="push-10-t">
                                                <a class="item item-rounded push-10-r bg-info" data-toggle="tooltip" title="MyPanel" href="javascript:void(0)">
                                                    <i class="si si-rocket text-white-op"></i>
                                                </a>
                                                <a class="item item-rounded push-10-r bg-amethyst" data-toggle="tooltip" title="Project Time" href="javascript:void(0)">
                                                    <i class="si si-calendar text-white-op"></i>
                                                </a>
                                                <a class="item item-rounded push-10-r bg-city" data-toggle="tooltip" title="iDashboard" href="javascript:void(0)">
                                                    <i class="si si-speedometer text-white-op"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END Generic Notification -->

                                    <!-- Twitter Notification -->
                                    <li>
                                        <div class="list-timeline-time">12 hrs ago</div>
                                        <i class="fa fa-twitter list-timeline-icon bg-info"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">+ 1150 Followers</p>
                                            <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                                        </div>
                                    </li>
                                    <!-- END Twitter Notification -->

                                    <!-- System Notification -->
                                    <li>
                                        <div class="list-timeline-time">1 day ago</div>
                                        <i class="fa fa-database list-timeline-icon bg-smooth"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">Database backup completed!</p>
                                            <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                                        </div>
                                    </li>
                                    <!-- END System Notification -->

                                    <!-- Social Notification -->
                                    <li>
                                        <div class="list-timeline-time">2 days ago</div>
                                        <i class="fa fa-user-plus list-timeline-icon bg-success"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">+ 5 Friend Requests</p>
                                            <ul class="nav-users push-10-t push">
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="{{asset('img/oneui/avatars/avatar3.jpg')}}" alt="">
                                                        <i class="fa fa-circle text-success"></i> Megan Dean
                                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="{{asset('img/oneui/avatars/avatar16.jpg')}}" alt="">
                                                        <i class="fa fa-circle text-success"></i> Dennis Ross
                                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="{{asset('img/oneui/avatars/avatar4.jpg')}}" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Lisa Gordon
                                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="{{asset('img/oneui/avatars/avatar11.jpg')}}" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Bruce Edwards
                                                        <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="{{asset('img/oneui/avatars/avatar16.jpg')}}" alt="">
                                                        <i class="fa fa-circle text-danger"></i> Eugene Burke
                                                        <div class="font-w400 text-muted"><small>UI Designer</small></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- END Social Notification -->

                                    <!-- System Notification -->
                                    <li>
                                        <div class="list-timeline-time">1 week ago</div>
                                        <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">System updated to v2.02</p>
                                            <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                        </div>
                                    </li>
                                    <!-- END System Notification -->

                                    <!-- Generic Notification -->
                                    <li>
                                        <div class="list-timeline-time">2 weeks ago</div>
                                        <i class="fa fa-briefcase list-timeline-icon bg-modern"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">1 New Product was added!</p>
                                            <div class="push-10-t">
                                                <a class="item item-rounded push-10-r bg-modern" data-toggle="tooltip" title="eSettings" href="javascript:void(0)">
                                                    <i class="si si-settings text-white-op"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END Generic Notification -->

                                    <!-- System Notification -->
                                    <li>
                                        <div class="list-timeline-time">2 months ago</div>
                                        <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                        <div class="list-timeline-content">
                                            <p class="font-w600">System updated to v2.01</p>
                                            <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                        </div>
                                    </li>
                                    <!-- END System Notification -->
                                </ul>
                            </div>
                        </div>
                        <!-- END Timeline -->
                    </div>
                    <div class="col-sm-5 col-lg-4">
                        <!-- Details -->
                        <div class="block">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title"><i class="fa fa-user"></i> Gegevens</h3>
                            </div>
                            <div class="block-content">
                                <ul class="list list-simple">

                                    <li>
                                        <div class="push-5 clearfix">
                                            <a class="font-w600" href="#">E-Mail</a>
                                        </div>
                                        <div class="font-s13">{{$user->email}}</div>
                                    </li>

                                    <li>
                                        <div class="push-5 clearfix">
                                            <a class="font-w600" href="#">Telefoonnummer</a>
                                        </div>
                                        <div class="font-s13">{{$user->profile->phone}}</div>
                                    </li>

                                    <li>
                                        <div class="push-5 clearfix">
                                            <a class="font-w600" href="#">LinkedIn</a>
                                        </div>
                                        <div class="font-s13">{{$user->profile->linkedin}}</div>
                                    </li>

                                    <li>
                                        <div class="push-5 clearfix">
                                            <a class="font-w600" href="#">Twitter</a>
                                        </div>
                                        <div class="font-s13">{{$user->profile->twitter}}</div>
                                    </li>

                                    <li>
                                        <div class="push-5 clearfix">
                                            <a class="font-w600" href="#">Facebook</a>
                                        </div>
                                        <div class="font-s13">{{$user->profile->facebook}}</div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <!-- END Details -->

                        <!-- Teams -->
                        <div class="block">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title"><i class="fa fa-fw fa-briefcase"></i> Teams</h3>
                            </div>
                            <div class="block-content">
                                <ul class="list list-simple list-li-clearfix">
                                    <li>
                                        <a class="item item-rounded pull-left push-10-r bg-info" href="javascript:void(0)">
                                            <i class="si si-rocket text-white-op"></i>
                                        </a>
                                        <h5 class="push-10-t">TeamTodo</h5>
                                        <div class="font-s13">Todo website voor school</div>
                                    </li>
                                    <li>
                                        <a class="item item-rounded pull-left push-10-r bg-amethyst" href="javascript:void(0)">
                                            <i class="si si-calendar text-white-op"></i>
                                        </a>
                                        <h5 class="push-10-t">MPA</h5>
                                        <div class="font-s13">Multi page applicatie</div>
                                    </li>
                                    <li>
                                        <a class="item item-rounded pull-left push-10-r bg-danger" href="javascript:void(0)">
                                            <i class="si si-speedometer text-white-op"></i>
                                        </a>
                                        <h5 class="push-10-t">Poke battle</h5>
                                        <div class="font-s13">PHP opdracht met Pokemons</div>
                                    </li>
                                </ul>
                                <div class="text-center push">
                                    <small><a href="javascript:void(0)">Bekijk alle</a></small>
                                </div>
                            </div>
                        </div>
                        <!-- END Teams -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

@endsection
