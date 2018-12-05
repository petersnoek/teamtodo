<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->

                <a class="h5 text-white" href="/dashboard">
                    <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">TeamTodo</span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content side-content-full">
                <ul class="nav-main">
                    <li>
                        <a class="active" href="/dashboard"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="base_pages_dashboard_v2.html"><i class="si si-rocket"></i><span class="sidebar-mini-hide">Dashboard v2</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Develop</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-magic-wand"></i><span class="sidebar-mini-hide">Layouts</span></a>
                        <ul>
                            <li>
                                <a href="base_layouts_api.html">Layout API</a>
                            </li>
                            <li>
                                <a href="base_layouts_default.html">Default</a>
                            </li>
                            <li>
                                <a href="base_layouts_default_flipped.html">Default Flipped</a>
                            </li>
                            <li>
                                <a href="base_layouts_header_static.html">Static Header</a>
                            </li>
                            <li>
                                <a href="base_layouts_sidebar_mini_hoverable.html">Mini Sidebar (Hoverable)</a>
                            </li>
                            <li>
                                <a href="base_layouts_side_overlay_hoverable.html">Side Overlay (Hoverable)</a>
                            </li>
                            <li>
                                <a href="base_layouts_side_overlay_open.html">Side Overlay (Open)</a>
                            </li>
                            <li>
                                <a href="base_layouts_side_native_scrolling.html">Side Native Scrolling</a>
                            </li>
                            <li>
                                <a href="base_layouts_sidebar_hidden.html">Hidden Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Multi Level Menu</span></a>
                        <ul>
                            <li>
                                <a href="#">Link 1-1</a>
                            </li>
                            <li>
                                <a href="#">Link 1-2</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                <ul>
                                    <li>
                                        <a href="#">Link 2-1</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 2-2</a>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 3-1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 3-2</a>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 4</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Link 4-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Link 4-2</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 5</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Link 5-1</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Link 5-2</a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 6</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Link 6-1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Link 6-2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
